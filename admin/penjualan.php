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

  <title>AdminLTE 3 | Barang Terjual
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
            <h1> Barang Terjual </h1>
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
              <li class="breadcrumb-item active"> Barang Terjual</li>
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
$result = mysqli_query($mysqli, "SELECT * FROM barang_laku  ");
$no=1;
?>
 <div class="col-lg-5 col-md-5 col-6">
                            <form  method="get">  
        <select type="submit" name="tanggal" class="form-control show-tick" onchange="this.form.submit()">
			<option>Pilih tanggal Untuk Mencetak </option>
            <?php 
            $pil = mysqli_query($mysqli, "select distinct tanggal from barang_laku order by tanggal desc");

            while($p = mysqli_fetch_array($pil)) {
			
				?>
				<option><?php echo $p['tanggal'] ?></option>
				<?php
			}
			?>			
		</select>	                                                         
		</form>
        </div>
        <br>
          <div class="card">
            <div class="card-header">
            <a href="tambahpenjualan" class="btn btn-round btn-info waves-effect"> <i class="fas fa-plus"></i>Tambah Data Penjualan</a>           
            
                  <?php 
if(isset($_GET['tanggal'])){
    $tanggal = addslashes($_GET['tanggal']);
	$tg="lap_barang_laku.php?tanggal='$tanggal'";
	?>
     <a href="<?php echo $tg ?>" target="_blank" class="btn btn-primary float-right" style="margin-right: 5px;">
                  <i class="fas fa-download"></i> Cetak penjualan </a><?php
}else{
	$tg="lap_barang_laku.php";
}
?>

<br/>
<?php 
if(isset($_GET['tanggal'])){
	echo "<h4> Data Penjualan Tanggal  <a style='color:blue'> ". $_GET['tanggal']."</a></h4>";
}
?>
                  
            </div>
   
            <!-- /.card-header -->
            <div class="card-body">
            <?php                     
                                $query  = "SELECT * FROM barang_laku";
                                $tampil = mysqli_query($mysqli, $query);
                          
                                  echo ' 
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <td>Tanggal</td>
                <td>Nama Barang</td>
                <td>Harga Terjual /pc</td>
                <td>Total Harga</td>
                <td>Jumlah</td>
                <td>Laba</td>
                <td data-breakpoints="xs">Action</td>
                </tr>
                </thead>
                <tbody>';
               
                                      
 
                                        if(addslashes(isset($_GET['tanggal']))){
                                            $tanggal = addslashes($_GET['tanggal']);
                                            $tampil = mysqli_query($mysqli,"select * from barang_laku where tanggal LIKE '%$tanggal%'");
                                        }
		while($res = mysqli_fetch_array($tampil)) {		
            $no=1;
            echo "<tr>";
            echo "<td>".$res['tanggal']."</td>";
            echo "<td>".$res['nama']."</td>";
            echo "<td>Rp.".(number_format($res['harga']))."</td>";
            echo "<td>Rp.".(number_format($res['total_harga']))."</td>";
            echo "<td>".$res['jumlah']."</td>";
            echo "<td>Rp.".(number_format($res['laba']))."</td>";
            echo '<td class="center">
												&nbsp;<a href="penjualan/'.$res['id'].'" title="Edit"><i class="fa fa-edit fa-fw"></i></a>&nbsp;
												&nbsp;<a href="hapus/hpenjualan.php?id='.$res['id'].'&jumlah='.$res['jumlah'].'&nama='.$res['nama'].'" title="Delete"><i class="fa fa-times fa-fw"></i></a>&nbsp;
												</td>';
            
           
                                                 echo "</tr>";



        }
        echo "</tbody>";
        ?>
                <tr>
                <td colspan='3'><h3>Total Modal</td></h3>
                <?php
if(isset($_GET['tanggal'])){
    $tanggal = addslashes($_GET['tanggal']);
    $x = mysqli_query($mysqli,"select sum(total_harga) as total from barang_laku where tanggal='$tanggal'");
    $xx = mysqli_fetch_array($x);		
echo'
                <td><h3>Rp.'.(number_format($xx['total'])).'</h3></td>';
            }else{
    
            }
                ?>
                </tr>
                <tr>
                <td colspan='3'><h3>Total pendapatan</td></h3>
                <?php
 if(isset($_GET['tanggal'])){
    $x = mysqli_query($mysqli,"select sum(laba) as total from barang_laku where tanggal='$tanggal'");
    $xx = mysqli_fetch_array($x);
echo'
                <td><h3>Rp.'.(number_format($xx['total'])).'</h3></td>';
            }else{
    
            }
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
