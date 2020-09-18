<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AdminLTE 3 | Hapus Foto Projek </title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php
//including the database koneksi file
include_once("./../../config.php");
$act=$_GET['act'];

if ($act=='hapus'){
    $dat = mysqli_query($mysqli,"SELECT gambar_baner FROM baner WHERE id_baner='$_GET[id_baner]'");
    $data = mysqli_fetch_array($dat);

  if ($data['gambar_baner']!=''){
    $data = mysqli_query($mysqli,"DELETE FROM baner WHERE id_baner='$_GET[id_baner]'");
        
     array_map('unlink', glob("./../../$_GET[namafile]"));
  }
  //redirecting to the display page (view.php in our case)
  echo '<script>
  swal({
   title: "Good job!",
   text: "Data baner/Slider Berhasil DI Hapus",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../../admin/baner";
 });
           </script>';
}

?>

</body>
</html>