<?php 
include "incl/connect.inc.php" ;


// $id_pendaftar = $_GET['no_pesan'];

// echo $id_pendaftar;
// die;
// $sql_pendaftar = "SELECT * FROM tb_pesan id = '$id_pendaftar'";
// $result_pendaftar = mysqli_query($connect, $sql_pendaftar);
// $data_pendaftar = mysqli_fetch_array($result_pendaftar);

// //cek hasil
// if(!$result_pendaftar){
//   die('Query Error : '. mysqli_error($connect));
// }

// $sql_nilai = "SELECT * FROM tb_pesan id = '$id_pendaftar'";
// $result_nilai = mysqli_query($connect, $sql_nilai);
// $data_nilai = mysqli_fetch_array($result_nilai);

// //cek hasil
// if(!$result_nilai){
//   die('Query Error : '. mysqli_error($connect));
// }


$query = mysqli_query($connect, "Select * FROM tb_pesan");
while($data = mysqli_fetch_array($query)){
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

}
?>
<?php 
 $kueri1 = "select a.no_pesan, a.id_kamar, b.nm_kamar from tb_pesan_kamar a, tb_kamar b 
 where a.id_kamar = b.id_kamar and a.no_pesan = '$no_pesan' order by id_kamar";
$qr1  = mysqli_query($connect,$kueri1);
while($data1 = mysqli_fetch_array($qr1))
{									 
$no_pesan = $data1['no_pesan'];
$id_kamar=$data1['id_kamar'];	
$nm_kamar=$data1['nm_kamar'];	

}

?>
<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf('P','A4','fr', true, 'UTF-8', array(15, 15, 15, 15), false); 
$cetak = "
</html>
<head>
  <title></title>
</head>
<body>
   <h1>GADJAH MADA HOMESTAY </h1> 
   <h4>Berikut Adalah Isi Data Pemesanan Anda :</h4> <br>
          Tanggal Pesan : <b>$tgl_pesan<br /></b><br>
          Nomor Pesan : <b>$no_pesan<br /></b><br>
          Nama : <b>$nama<br /></b><br>
          Email : <b>$email<br /></b><br>
          Phone : <b>$phone<br /></b><br>
          Kota : <b>$kota<br /></b><br>
          Tanggal Check In : <b>$tgl_cekin<br /></b><br>
          Tanggal Check Out : <b>$tgl_cekout<br /></b><br>
          Tipe : <b>$nm_kamar<br /></b>
          
</body>
</html>
";
          
          
         
         
$html2pdf->writeHTML($cetak);
$html2pdf->output();  //manual download
// $html2pdf->output("Bukti pesanan-Homestay.pdf","D"); //auto download
// $html2pdf->output(__DIR__."/contoh_laporan.pdf","F"); //download di direktori folder
?>







