<?php

// Jenis Browser
$browser = $_SERVER['HTTP_USER_AGENT'];
$chrome = '/Chrome/';
$firefox = '/Firefox/';
$ie = '/IE/';
if (preg_match($chrome, $browser))
    $data = "Chrome/Opera";
if (preg_match($firefox, $browser))
    $data = "Firefox";
if (preg_match($ie, $browser))
    $data = "IE";

// untuk mengambil informasi dari pengunjung
$ipaddress = $_SERVER['REMOTE_ADDR']."";
$browser = $data;
$tanggal = date('Y-m-d');
$kunjungan = 1;
// Daftarkan Kedalam Session Lalu Simpan Ke Database
if (!isset($_SESSION['counter'])){
$_SESSION['counter']=$ipaddress;
mysqli_query($conn,"INSERT INTO counter (tanggal,ip_address,counter,browser) VALUES ('".$tanggal."','".$ipaddress."','".$kunjungan."','".$browser."')");
} 
// Hitung Jumlah Visitor
$kemarin  = date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
$hari_ini  = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) AS hari_ini FROM counter WHERE tanggal="'.date("Y-m-d").'"'));
$kemarin = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) AS kemarin FROM counter WHERE tanggal="'.$kemarin.'"'));
$sql = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) as total FROM counter'));
?>

