<?php 


$BASE_URL = 'http://localhost:8080/final-projek/';

$routes = array(
    "login" => $BASE_URL . 'pages/login.php',
    "register" => $BASE_URL . 'pages/register.php',
    //===Penjual===
    "mainPageAdm" => $BASE_URL . 'pages/main_page.php',
    //===Pembeli===
    "mainPageUsr" => $BASE_URL . 'pages_user/main_pageUsr.php'
);

$user   = "root";
$pass   = "";
$host   = "localhost";
$db     = "penjual";
$con = mysqli_connect($host, $user, $pass, $db) or die("Koneksi Gagal");
?>