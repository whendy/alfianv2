

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AdminLTE 3 | Hapus Komentar Baner </title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php
//including the database koneksi file
include_once("./../../config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM baner_komentar WHERE id=$id");

//redirecting to the display page (view.php in our case)
echo '<script>
  swal({
   title: "Good job!",
   text: "Komentar Baner Berhasil DI Hapus",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../../admin/kobaner";
 });
           </script>';
?>
</body>
</html>