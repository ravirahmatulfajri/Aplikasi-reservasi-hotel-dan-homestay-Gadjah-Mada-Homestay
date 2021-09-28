<?php


// config database 
$db_host = '172.17.0.1';
$db_user = 'root';
$db_pass = 'example';
$db_name = 'hotel';

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connect) {
	echo " SYSTEM ERROR - PLEASE CHECK file: connect.inc.php";
}

// memilih database pada server
// mysqli_select_db("db_hotel1") or die ( " ==> CONNECTION INVALID WITH DATABASE  <==");
// $database = mysqli_select_db($connect, 'hotel');


// SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));