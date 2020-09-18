<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AdminLTE 3 | Hapus penjualan </title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<?php 
//including the database koneksi file
include_once("./../../config.php");
$id=(addslashes($_GET['id']));
$jumlah=(addslashes($_GET['jumlah']));
$nama=(addslashes($_GET['nama']));

$a = mysqli_query($mysqli, "select * from barang where nama='$nama'");
$b = mysqli_fetch_array($a);
$kembalikan=$b['jumlah']+$jumlah;
$c = mysqli_query($mysqli, "update barang set jumlah='$kembalikan' where nama='$nama'");
$result=mysqli_query($mysqli, "DELETE FROM barang_laku WHERE id=$id");
//redirecting to the display page (view.php in our case)
echo '<script>
  swal({
   title: "Good job!",
   text: "Data penjualan Berhasil DI Hapus",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../../admin/penjualan";
 });
           </script>';

 ?>
</body>
</html>