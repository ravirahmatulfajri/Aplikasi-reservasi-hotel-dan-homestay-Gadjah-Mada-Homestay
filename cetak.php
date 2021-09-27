<?php
	$content = "
	<html> 
	<body>
		<h1>Gadjah Mada Homestay</h1> 
        Selamat datang di Gadjah Mada Homestay<br>
        Berikut Bukti Pesanan Anda
	</body>
	</html>
	";

	require __DIR__.'/html2pdf/vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;
	$html2pdf = new Html2Pdf('P','A4','fr', true, 'UTF-8', array(15, 15, 15, 15), false); 
	$html2pdf->writeHTML($content);
	$html2pdf->output();
?>