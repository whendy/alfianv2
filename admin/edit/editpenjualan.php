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
// including the database koneksi file
include_once("./../../config.php");


if(isset($_POST['update']))
{	
	
    $id = $_POST['id'];
    $nama		= $_POST['nama'];
    $tanggal		= $_POST['tanggal'];
    $harga		= $_POST['harga'];
    $jumlah		= $_POST['jumlah'];
    

	// checking empty fields
	if(empty($nama) || empty($tanggal) || empty($harga) || empty($jumlah)) {
				
		echo "<script>window.alert('Data Yang  DI Ubah Tidak Lengkap')
        window.location='./../../admin/penjualan'</script>";

	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE barang_laku SET nama='$nama', tanggal='$tanggal', harga='$harga', jumlah='$jumlah' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Data Berhasil DI Ubah')
        window.location='./../../admin/penjualan'</script>";	
	}
}
?>

<?php
include "../../config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Edit Penjualan | <?php echo $nama;?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<?php
include "../menu/menu2.php"
?>
<?php
//including the database koneksi file
include_once("./../../config.php");
$id=$_GET['id'];
	$result=mysqli_query($mysqli, "SELECT * FROM barang_laku WHERE id=$id");
    while($res=mysqli_fetch_array($result))
    {
        $nama = $res['nama'];
        $tanggal = $res['tanggal'];
        
        $harga = $res['harga'];
        $jumlah = $res['jumlah'];
        

        
    }
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Penjualan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
         
        <div class="col-md-12">
            <div class="card">
              
            
              <div class="card-body">
              
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <form action="../penjualan/<?php echo addslashes($id);?>" method="POST" enctype='multipart/form-data'  class="form-horizontal">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Tgl Penjualan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="tanggal" readonly value="<?php echo $tanggal; ?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama  Barang DI jual</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="nama">
                                <?php 
                                $brg = mysqli_query($mysqli, "select * from barang");

                                while($b = mysqli_fetch_array($brg)) {
								
									?>	
									<option value="<?php echo $b['nama']; ?>"><?php echo $b['nama'] ?> | HargaperUnit : <?php echo $b['harga'] ?>| Stok : <?php echo $b['jumlah'] ?></option>
									<?php 
								}
								?>
							</select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">harga Jual</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="harga"><?php echo $harga ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">jumlah Di jual</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="jumlah"><?php echo $jumlah ?></textarea>
                        </div>
                      </div>           
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger" name="update" value="update">Update</button>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                 

                
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../dist/js/demo.js"></script>

</body>
</html>
