<?php
$host = 'localhost';
$user = 'root';
$pass = '';

$connect = mysqli_connect($host, $user, $pass);
if (!$connect) {
	echo " SYSTEM ERROR - PLEASE CHECK file: connect.inc.php";
}

// memilih database pada server
// mysqli_select_db("db_hotel1") or die ( " ==> CONNECTION INVALID WITH DATABASE  <==");
$database = mysqli_select_db($connect, 'db_homestay');
