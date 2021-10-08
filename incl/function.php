<?php
//sistem tanggal

// $_waktu = date("Y-m-d");

// $_tahun = substr($_waktu, 0, 4);
// $_bulan = substr($_waktu, 5, 2);
// $_tanggal = substr($_waktu, 8, 2);
// if ($_waktu != "0000-00-00") {
// 	$_hari_en = date("D", mktime(0, 0, 0, $_bulan, $_tanggal, $_tahun));
// 	$hari_en = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
// 	$hari_id = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
// 	$bulan_en = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
// 	$bulan_id = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agst", "Sept", "Okt", "Nov", "Des");
// 	$_hari_id = str_replace($hari_en, $hari_id, $_hari_en);
// 	$_bulan_id = str_replace($bulan_en, $bulan_id, $_bulan);
// 	$_tgl = $_hari_id . ", " . $_tanggal . " " . $_bulan_id . " " . $_tahun;
// 	$tglX = $_tgl;
// } else {
// 	$tglX = "-";
// }
// $_jam = date("H:i");
// $tglX .= "&nbsp&nbsp;|&nbsp;&nbsp;" . $_jam;
// $tanggal = $_tgl;
// $tgl_jam = $tglX;


function tgl_indo($tanggal)
{
	$bulan = array(1 => "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agst", "Sept", "Okt", "Nov", "Des");

	$hari_en = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
	$hari_id = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");



	$pecah = explode('-', $tanggal);


	// variabel pecah 0 = tanggal
	// variabel pecah 1 = bulan
	// variabel pecah 2 = tahun

	return str_replace($hari_en, $hari_id, $pecah[3]) . ", " . $pecah[2] . " " . $bulan[(int)$pecah[1]] . " " . $pecah[0];
	// $tanggal = tgl_indo(date('Y-m-d-D'));
}



/* function tanggalIndo($_waktu) {
	if($_waktu[tgl] == "0000-00-00" || !$_waktu[tgl] || $_waktu[tgl] == "0000-00-00 00:00:00") {
		$_ret = "&minus;";
	} else {
		
		$_tahun = substr($_waktu[tgl],0,4);
		$_bulan = substr($_waktu[tgl],5,2);
		$_tanggal = substr($_waktu[tgl],8,2);
		$_jam= substr($_waktu[tgl],11,2);
		$_mnt= substr($_waktu[tgl],14,2);
		$_dtk= substr($_waktu[tgl],17,2);
		
		$_hari_en =date("D", mktime(0,0,0,$_bulan, $_tanggal, $_tahun));
		$hari_en = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
		$hari_id = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu");
		$bulan_en = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
		$bulan_id = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$_hari_id = str_replace($hari_en, $hari_id, $_hari_en);
		$_bulan_id = str_replace($bulan_en, $bulan_id, $_bulan);
		$_ret = $_hari_id . ", " .$_tanggal . " " .$_bulan_id. " " . $_tahun;
		//$_ret = $_tanggal . " " .$_bulan_id. " " . $_tahun ;//." ". $_jam . ":". $_mnt;
	}
	return $_ret;
} 

function smarty_block_dynamic($param, $content, &$this) { 
		return $content; 
} 

function warning($header,$isi){	
	$warning = "<div id=\"warningBox\">";
	$warning .= "$isi<br /><br /></div></div>";	
	echo $warning;
}

function warning2($isi){	
	$warning = "<div align=\"center\">";
	$warning .= "<table border=\"0\" width=\"70%\"cellpadding=\"0\" cellspacing=\"0\">";
	$warning .= "<tr><td class=\"col4\">";
	$warning .= "<div align=\"center\"><br />";
	$warning .= "$isi<br><br /></div></td></tr></table>";	
	$warning .= "</div>";
	echo $warning;
}

function potong($isi, $jml){
	$isi = strip_tags($isi);
	$potongan = explode(" ",$isi);
	$ptg = array();
	for ($i=0;$i<$jml;$i++){
		$ptg[$i] = "".$potongan[$i]."";
	}
	$ptg = implode($ptg," ");
	return $ptg;
}
function kata($kata, $limit){
	$hasil = wordwrap(stripslashes(strip_tags($kata)), $limit, "\n",1);
	return $hasil;
}

function sampaititik2($paramm){
	$isi = $paramm['eesi'];
	$mulai = $paramm['moolai'];
	$pjg = strlen($isi);
	$ptg = array();
	for($mulai;$mulai<=$pjg;$mulai++){
		$ptg[$mulai] = $isi[$mulai];
		if(($ptg[$mulai] == ".") || ($mulai == 250)){
			break;
		}
	}
	$ptg = implode($ptg,"");
	$ptg = "".trim($ptg)."";
	return $ptg;
}

function getImagesizes($params){
	$arr = getimagesize(PATHIMG."/".$params['img']);
	if ($arr[0] > MAXWIDTH){
		$lebar = MAXWIDTH;
	} else {
		$lebar = $arr[0];
	}
	return $lebar;
}
function streep($kata){
    return stripslashes($kata[bla]);
} */



?>

<script>
	function gotowhatsapp() {

		var name = document.getElementById("name").value;
		var phone = document.getElementById("phone").value;
		var email = document.getElementById("email").value;
		var service = document.getElementById("service").value;

		var url = "https://wa.me/918789529215?text=" +
			"Name: " + name + "%0a" +
			"Phone: " + phone + "%0a" +
			"Email: " + email + "%0a" +
			"Service: " + service;

		window.open(url, '_blank').focus();
	}
</script>