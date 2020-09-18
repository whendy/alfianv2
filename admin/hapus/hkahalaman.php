

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AdminLTE 3 | kahalaman </title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php
//including the database koneksi file
include_once("./../../config.php");

//getting id of the data from url
$category_id = $_GET['category_id'];

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM categories WHERE category_id=$category_id");

//redirecting to the display page (view.php in our case)
echo '<script>
  swal({
   title: "Good job!",
   text: "kahalaman Berhasil DI Hapus",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../../admin/kahalaman";
 });
           </script>';
?>
</body>
</html>