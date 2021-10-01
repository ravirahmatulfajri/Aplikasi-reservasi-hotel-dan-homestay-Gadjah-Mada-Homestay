<?php
include "incl/connect.inc.php" ;
// include_once("incl/function.php");

$kueri = "select a.*, b.tipe_kamar from tb_pesan a, tb_kamar_tipe b where a.id_tipe = b.id_tipe and a.no_pesan = '$_GET[no_pesan]'";
$qry  = mysqli_query($connect,$kueri);
while($data = mysqli_fetch_array($qry))
{
$id_pesan = $data['id_pesan'];
$no_pesan = $data['no_pesan'];
$tgl_pesan = date("j/n/Y | H:i",$data['tgl_pesan']);
$nama = $data['nama'];
$email=$data['email'];
$phone = $data['phone'];
$kota=$data['kota'];
$alamat = $data['alamat'];
$tgl_cekin = date("j/n/Y",$data['tgl_cekin']);
$tgl_cekout = date("j/n/Y",$data['tgl_cekout']);
$id_tipe=$data['id_tipe'];
$tipe_kamar=$data['tipe_kamar'];
}
?>
<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- Dining Start -->
  <div class="dining-area dining-padding-top">
            <!-- Single Left img -->
            <div class="single-dining-area left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-left">
                                <span>Selamat....Pesanan Hotel Berhasil</span>
                                <td>Tanggal Pesan :<td><b>  <?php echo"$tgl_pesan" ?></b></td><br>
                                <td>Nomor Pesan :<td><b>  <?php echo"$no_pesan" ?></b></td><br><br>
                                <span>Berikut Adalah Isi Data Pemesanan Anda</span>
                                <td>Nama :<td><b>  <?php echo"$nama" ?></b></td><br>
                                <td>Email :<td><b>  <?php echo"$email" ?></b></td><br>
                                <td>Phone :<td><b>  <?php echo"$phone" ?></b></td><br>
                                <td>Kota :<td><b>  <?php echo"$kota" ?></b></td><br>
                                <td>City :<td><b>  <?php echo"$alamat" ?></b></td><br>
                                <td>Tanggal Check In :<td><b>  <?php echo"$tgl_cekin" ?></b></td><br>
                                <td>Tanggal Check Out :<td><b>  <?php echo"$tgl_cekout" ?></b></td><br>
                                <td>Tipe  :<td><b>  <?php echo"$tipe_kamar" ?></b></td><br>
                                <td>Booking :<td><b> <?php
									  
									  $kueri1 = "select a.no_pesan, a.id_kamar, b.nm_kamar from tb_pesan_kamar a, tb_kamar b 
									  				where a.id_kamar = b.id_kamar and a.no_pesan = '$no_pesan' order by id_kamar";
									  $qr1  = mysqli_query($connect,$kueri1);
									  while($data1 = mysqli_fetch_array($qr1))
									  {									 
									  $no_pesan = $data1['no_pesan'];
									  $id_kamar=$data1['id_kamar'];	
									  $nm_kamar=$data1['nm_kamar'];	
									 
									  
									  echo" <b>$nm_kamar<br /></b>";
									  }
									  ?>	</td><br>
                              
                                <p>Segera lakukan pembayaran<br> Sebelum batas waktu yang ditentukan <br>Ya.</p>
                                <a href="accommodation.php" class="btn border-btn">Pesan Lagi  <i class="ti-angle-left"></i></a>
                                <a href="cetakpdf.php" class="btn border-btn" target='_blank'>Cetak Bukti Pesanan  <i class="ti-angle-left"></i></a>
                                <!-- <a href="cetakpdf.php?no_pesan=..." class="btn border-btn" target='_blank'>Cetak Bukti Pesanan  <i class="ti-angle-left"></i></a> -->
                                <!-- <a href="cetakpdf.php?<?= $data1['no_pesan']?>" class="btn border-btn" target='_blank'>Cetak Bukti Pesanan  <i class="ti-angle-left"></i></a> -->
                                <!-- index.php?menu=success-resevations&no_pesan=$_POST[no_pesan] -->
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
           
        </div>
        <!-- Dining End -->       
      
    
           
							<form onSubmit="return checkrequired(this)" id="form1" name="form1" method="post" action="functions.php">
                               
								 
									  
                    </td></tr></table></form></td></tr></table>
                 
          <td>&nbsp;</td>
         
