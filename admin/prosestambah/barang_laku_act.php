<?php 
error_reporting(0);
include '../../config.php';

$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

$dt = mysqli_query($mysqli, "select * from barang where nama='$nama'");
$data = mysqli_fetch_array($dt);
$sisa=$data['jumlah']-$jumlah;
$result = mysqli_query($mysqli, "update barang set jumlah='$sisa' where nama='$nama'");

$modal=$data['modal'];
$laba=$harga-$modal;
$labaa=$laba*$jumlah;
$total_harga=$harga*$jumlah;
mysqli_query($mysqli, "insert into barang_laku values('','$tanggal','$nama','$jumlah','$harga','$total_harga','$labaa')")or die(mysql_error());
echo "<script>window.alert('Data Berhasil DI Tambah')
    window.location='../admin/penjualan'</script>";

?>