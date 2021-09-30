<?php
session_start();
if (!isset($_SESSION['user_id'])) 
{
include "../admin/index.php";
exit;
}

//application title
$title = "Sistem Informasi Hotel Kusuma";
$descr = "Sistem Informasi";
$keyw  = "hotel, kusuma";
$keyp  = "Hotel Kusuma, Sistem Informasi";

//application title
define("APP_TITLE", strip_tags($title));
define("APP_DESCR", strip_tags($descr));
define("APP_KEYW", strip_tags($keyw));
define("APP_KEYP", strip_tags($keyp));
?>