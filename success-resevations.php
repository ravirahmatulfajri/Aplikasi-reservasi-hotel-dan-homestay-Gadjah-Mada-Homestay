<?php
include "incl/connect.inc.php";
// include_once("incl/function.php");

// require mail untuk fungsi mailSuccess
require __DIR__ . '/mail.php';

$kueri = "select a.*, b.tipe_kamar from tb_pesan a, tb_kamar_tipe b where a.id_tipe = b.id_tipe and a.no_pesan = '$_GET[no_pesan]'";
$qry  = mysqli_query($connect, $kueri);
while ($data = mysqli_fetch_array($qry)) {
    $id_pesan = $data['id_pesan'];
    $no_pesan = $data['no_pesan'];
    $tgl_pesan = date("j/n/Y | H:i", $data['tgl_pesan']);
    $nama = $data['nama'];
    $email = $data['email'];
    $phone = $data['phone'];
    $kota = $data['kota'];
    $alamat = $data['alamat'];
    $tgl_cekin = date("j/n/Y", $data['tgl_cekin']);
    $tgl_cekout = date("j/n/Y", $data['tgl_cekout']);
    $id_tipe = $data['id_tipe'];
    $tipe_kamar = $data['tipe_kamar'];
}


// query mendapatkan nomor kamar yang di pilih

$kueri1 = "select a.no_pesan, a.id_kamar, b.nm_kamar from tb_pesan_kamar a, tb_kamar b 
                    where a.id_kamar = b.id_kamar and a.no_pesan = '$no_pesan' order by id_kamar";
$qr1  = mysqli_query($connect, $kueri1);

$kamar = [];

while ($data1 = mysqli_fetch_array($qr1)) {
    $no_pesan = $data1['no_pesan'];
    $id_kamar = $data1['id_kamar'];
    $nm_kamar = $data1['nm_kamar'];


    // kamar di push yang nantinya akan di implute
    array_push($kamar, ' ' . $nm_kamar);
}

// template untuk send email dan tampilan detail
$htmlMail = '
<h1 style="color: black; font-size: 32px; font-weight: bold; line-height: 36px; margin: 0 0 30px 0">
    Pesanan Hotel Berhasil
</h1>

<h3>Detail Pesanan</h3>

<table style="width: 60%;">
    <tr>
        <td>Tanggal Pesan :</td>
        <td> ' . $tgl_pesan . '</td>
    </tr>
    <tr>
        <td>Nomor Pesan :</td>
        <td> ' . $no_pesan . '</td>
    </tr>
    <tr>
        <td>Nama :</td>
        <td> ' . $nama . '</td>
    </tr>
    <tr>
        <td>Email :</td>
        <td> ' . $email . '</td>
    </tr>
    <tr>
        <td>Phone :</td>
        <td> ' . $phone . '</td>
    </tr>
    <tr>
        <td>Kota :</td>
        <td> ' . $kota . '</td>
    </tr>
    <tr>
        <td>City :</td>
        <td> ' . $alamat . '</td>
    </tr>
    <tr>
        <td>Tanggal Check In :</td>
        <td> ' . $tgl_cekin . '</td>
    </tr>
    <tr>
        <td>Tanggal Check Out :</td>
        <td> ' . $tgl_cekout . '</td>
    </tr>
    <tr>
        <td>Tipe :</td>
        <td> ' . $tipe_kamar . '</td>
    </tr>
    <tr>
        <td>Booking :</td>
        <td>' . implode(" | ", $kamar) . '</td>
    </tr>
    </tr>
</table>

';

// kirim email mailSuccess(penerima, subject, body)
// mailSuccess($email, 'Selamat....Pesanan Hotel Berhasil', $htmlMail);

?>

<!-- Dining Start -->
<div class="dining-area dining-padding-top">
    <!-- Single Left img -->
    <div class="single-dining-area left-img">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-8">
                    <div class="dining-caption text-left">

                        <?= $htmlMail ?>

                        <p class="mt-10">Segera lakukan pembayaran<br> Sebelum batas waktu yang ditentukan Ya.</p>
                        <a href="accommodation.php" class="btn border-btn">Pesan Lagi <i class="ti-angle-left"></i></a>
                        <a href="cetakpdf.php?no_pesan=<?= $_GET['no_pesan'] ?>" class="btn border-btn">Cetak Bukti Pesanan <i class="ti-angle-left"></i></a>
                        <form method="post" action="">
                            <input name="kirim" type="submit" class="btn more-btn" id="kirim" value="Kirim via WhatsApp">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Dining End -->

<?php
if (isset($_POST['kirim'])) {

    echo "<script>window.location = 'https://api.whatsapp.com/send?phone=$phone&text=%2ADetail%20Pesanan%20Anda%2A%0D%0A%0D%0A%2ATanggal%20Pesan%2A%20%3A$tgl_pesan%20%0D%0A%2ANomor%20Pesan%2A%20%3A%20$no_pesan%20%0D%0A%2ANama%2A%20%3A%20$nama%20%0D%0A%2AEmail%2A%20%3A%20$email%20%0D%0A%2APhone%2A%20%3A%20$phone%0D%0A%2AKota%2A%20%3A%20$kota%0D%0A%2AAlamat%2A%20%3A%20$alamat%0D%0A%2ATanggal%20Cekin%2A%20%3A%20$tgl_cekin%20%20%0D%0A%2ATanggal%20Cekout%2A%20%3A%20$tgl_cekout%20%0D%0A%2ATipe%20Kamar%2A%20%3A%20$tipe_kamar%20%20%0D%0A%2ABooking%2A%20%3A%20$nm_kamar&source=&data='</script> ";
}
?>
<!-- <form method="post" action="">
<input name="kirim" type="submit"  class="btn more-btn1" id="kirim" value="Kirim">
</form> -->