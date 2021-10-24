<?php

include "incl/connect.inc.php";
// include "incl/function.php" ;

//print_r($_GET);
//Guest Relations
if (isset($_POST['guest_new'])) {
	$konfir_nama = $_POST['required_nama'];
	$konfir_email = $_POST['required_email'];

	$perintah = "insert into tb_contact_us (nama, alamat, phone, email, pesan, tgl_pesan)
				values ('$_POST[required_nama]','$_POST[required_alamat]','$_POST[required_phone]','$_POST[required_email]','$_POST[required_pesan]','$_POST[tanggal]')";

	$berhasil = mysqli_query($connect, $perintah)
		or die("<SCRIPT> alert('Data tidak masuk database / data telah ada !!'); history.back(); </SCRIPT>");
	if ($berhasil) {
		header("location: location.php");
	}
	exit;
}
if (isset($_POST['guest_reset'])) {
	header("location: index.php?menu=guestrelations");
	exit;
}


//Reservations
if (isset($_POST['checking_room'])) {

	$id = $_POST['id_tipe'];
	$tgl_checkout = $_POST['tgl_cekout'];
	$tgl_cekin = $_POST['tgl_cekin'];


	if ((isset($tgl_checkout) && $tgl_checkout !== '') && (isset($tgl_cekin) && $tgl_cekin !== '')) {
		$tglci = strtotime(date($tgl_cekin));
		$tglco = strtotime(date($tgl_checkout));

		header("location: index.php?menu=register&in=$tglci&out=$tglco&id=$id");
		
		exit;
	} else {
			
		
		include("index.php");
		echo "<SCRIPT> alert('Maaf, Masukkan Tanggal Reservations !! !'); history.back(); </SCRIPT>";
		exit;
	}
}

if (isset($_POST['reservation_new'])) {
	//Batas Maksimal
	$tgl_pesan = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));


	$total = 0;
	$sql_data = mysqli_query($connect, "select * from tb_pesan where nama = '$_POST[required_nama]' and email = '$_POST[required_email]'");
	while ($data = mysqli_fetch_array($sql_data)) {
		$total++;
	}
	if ($total > 0) {
		include("index.php");
		echo "<SCRIPT> alert('Maaf, Room saat ini sudah di pesan !! !'); history.back(); </SCRIPT>";
		exit;
	}

	$_POST["id_kamar"] = $_POST['required_id_kamar'];
	$_POST["jumlah_data"] = count($_POST["id_kamar"]);

	for ($i = 0; $i < $_POST["jumlah_data"]; $i++) {
		$data1 = $_POST["id_kamar"][$i];
		$simpan = "insert into tb_pesan_kamar (no_pesan, id_kamar,tgl_checkin) values ('$_POST[no_pesan]','$data1','$_POST[tgl_cci]')";


		$kueri = "select * from tb_kamar where id_kamar = $data1";
		$proses = mysqli_query($connect, $kueri);
		while ($data = mysqli_fetch_array($proses)) {
			$status = $data['status'];

			if ($status == 'free') {
				$set_status = 'booking';
			}
		}

		mysqli_query($connect, "update tb_kamar set status='$_POST[set_status]' where id_kamar=$data1");

		$db_simpan = mysqli_query($connect, $simpan) or die("Gagal Simpan");
	}
	if ($db_simpan) {

		$perintah = "insert into tb_pesan (tgl_pesan, no_pesan, email, phone, nama, kota, alamat, tgl_cekin, tgl_cekout, id_tipe)
				values ('$tgl_pesan','$_POST[no_pesan]','$_POST[required_email]','$_POST[required_phone]','$_POST[required_nama]','$_POST[required_city]',
				'$_POST[required_alamat]','$_POST[tgl_cci]','$_POST[tgl_cco]','$_POST[id_tipe]')";

		$berhasil = mysqli_query($connect, $perintah)
			or die("<SCRIPT> alert('Data tidak masuk database / data telah ada !!'); history.back(); </SCRIPT>");
		if ($berhasil) {
			header("location: index.php?menu=success-resevations&no_pesan=$_POST[no_pesan]");
		}
		exit;
	}
}
