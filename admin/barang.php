<?php
session_start();

if( !isset($_SESSION['saya_admin']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$id = ( isset($_SESSION['id']) ) ? $_SESSION['id'] : '';
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
$email = ( isset($_SESSION['email']) ) ? $_SESSION['email'] : '';
$userfile = ( isset($_SESSION['userfile']) ) ? $_SESSION['userfile'] : '';
$no = ( isset($_SESSION['no']) ) ? $_SESSION['no'] : '';
$alamat = ( isset($_SESSION['alamat']) ) ? $_SESSION['alamat'] : '';
$keterangan = ( isset($_SESSION['keterangan']) ) ? $_SESSION['keterangan'] : '';
$hak_akses = ( isset($_SESSION['hak_akses']) ) ? $_SESSION['hak_akses'] : '';
$username = ( isset($_SESSION['username']) ) ? $_SESSION['username'] : '';

?>
<?php
include "./../config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Data Barang
 | <?php echo $nama;?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<?php
include "menu/menu.php"
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Data Barang </h1>
            <?php 
$result = mysqli_query($mysqli, "select * from barang where jumlah <=3");

    while($q = mysqli_fetch_array($result)) {
	if($q['jumlah']<=3){	
		?>	
		<?php
        echo '
        <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
        Stok <b>'. $q['nama_barang'].'</b> yang tersisa sudah kurang dari 3 .
      </div>
       ';
	}
}
?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Data Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
        <?php

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM barang  ");
$no=1;
?>

          <div class="card">
            <div class="card-header">
            <a href="tambahbarang" class="btn btn-round btn-info waves-effect"> <i class="fas fa-plus"></i>Tambah  Barang </a>           
            <a href="cetak_barang" target="_blank" class="btn btn-primary float-right" style="margin-right: 5px;">
                  <i class="fas fa-download"></i> Cetak Barang </a>
            </div>
   
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                <td>Kode Barang</td>
                <td>Tanggal Input</td>
                <td>Nama Barang</td>
                <td>Harga Jual</td>
                <td>Modal Per Unit</td>
                <td>Jumlah</td>
                <td>Gambar</td>
                <td data-breakpoints="xs">Action</td>
                </tr>
                </thead>
                <tbody>
                <?php
		while($res = mysqli_fetch_array($result)) {	
            $nama = strip_tags($res['nama_barang']);

            $des = htmlentities(strip_tags($res['nama_barang'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $nama = substr($des,0,100); // ambil sebanyak 220 karakter
            ?>		
                
                <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo addslashes($res['kode_barang']);?></td>
                <td><?php echo addslashes($res['tgl_input']);?></td>
                <td><?php echo addslashes($nama);?></td>
                <td>Rp.<?php echo addslashes(number_format($res['harga']));?></td>
                <td>Rp.<?php echo addslashes(number_format($res['modal']));?></td>                
                <td><?php echo addslashes($res['jumlah']);?></td>
                <td><img src=./../<?php echo addslashes($res['gambar_barang']);?> class="rounded-circle avatar"style="width:50px;height:50;"></td>
                <td class="center">
												&nbsp;<a href="barang/<?php echo addslashes($res['id']);?>" title="Edit"><i class="fa fa-edit fa-fw"></i></a>&nbsp;
												&nbsp;<a href="hapus/hbarang.php?act=hapus&id=<?php echo addslashes($res['id']);?>&namafile=<?php echo addslashes($res['gambar']);?>" title="Delete"><i class="fa fa-times fa-fw"></i></a>&nbsp;
												</td>
                 
                </tr>
                <?php
                                                        }
                                                       
                                                        ?>
                </tbody>
                <tr>
                <td colspan='3'><h3>Total Modal</td></h3>
                <?php

$x = mysqli_query($mysqli,"select sum(modal) as total from barang");
            $xx = mysqli_fetch_array($x);
echo'
                <td><h3>Rp.'.(number_format($xx['total'])).'</h3></td>';
                ?>
                </tr>
                <tr>
                <td colspan='3'><h3>Total pendapatan</td></h3>
                <?php

$x = mysqli_query($mysqli,"select sum(harga*jumlah)-sum(modal*jumlah) as pendapatan from barang");
            $xx = mysqli_fetch_array($x);
echo'
                <td><h3>Rp.'.(number_format($xx['pendapatan'])).'</h3></td>';
                ?>
                </tr>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
