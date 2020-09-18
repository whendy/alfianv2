
<?php
//including the database koneksi file
include_once("./../../config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//redirecting to the display page (view.php in our case)
echo "<script>window.alert('Data Berhasil DI Hapus')
    window.location='./../../admin/user'</script>";
?>

