<?php

use Spipu\Html2Pdf\Html2Pdf;

session_start();
ob_start();
include "incl/connect.inc.php" ; //buat koneksi ke database
$kode   = $_GET['kode']; //kode berita yang akan dikonvert
$query  = mysqli_query($connect,$kode);
$data   = mysqli_fetch_array($query);

?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $data['NIS']; ?></title>
</head>
<body>
<?php
echo "<h1>".$data['NIS']."</h1>"; 
echo '<table border="0">
  <tr>
    <td width="100">NAMA</td>
    <td width="10">:</td>
    <td width="250">'.$data['NAMA'].'</td>
  </tr>
  <tr>
    <td>TGL LAHIR</td>
    <td>:</td>
    <td>'.$data['TGL_LAHIR'].'</td>
  </tr>
  <tr>
    <td>ALAMAT</td>
    <td>:</td>
    <td>'.$data['ALAMAT'].'</td>
  </tr>
   <tr>
    <td>TELEPON</td>
    <td>:</td>
    <td>'.$data['TELP'].'</td>
  </tr>
  <tr>
    <td>ANGKATAN</td>
    <td>:</td>
    <td>'.$data['ANGKATAN'].'</td>
  </tr>
</table>';

echo "<p>data yang tertera di atas adalah mahasiswa universitas ini.</p>";
echo "<p align='right'>JAKARTA, ".date('d-m-Y')."
<img src='ttd.png' width='120'>
( Anggun Patriana )</p>";
?>
</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="mhs-".$kode.".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
 require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>