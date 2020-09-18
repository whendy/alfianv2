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
    $jenis		= $_POST['jenis'];
    $suplier	= $_POST['suplier'];
    $modal		= $_POST['modal'];
    $harga		= $_POST['harga'];
    $jumlah		= $_POST['jumlah'];
    $sisa		= $_POST['sisa'];
    $deskripsi		= $_POST['deskripsi'];
    $warna		= $_POST['warna'];
    $deskripsi2		= $_POST['deskripsi2'];
    $meta_key		= $_POST['meta_key'];
    $meta_des		= $_POST['meta_des'];

	// checking empty fields
	if(empty($nama) || empty($jenis) || empty($suplier) || empty($modal) || empty($harga) || empty($jumlah) || empty($sisa) || empty($deskripsi) || empty($warna) || empty($deskripsi2) || empty($meta_key) || empty($meta_des)) {				
		echo "<script>window.alert('Data Yang  DI Ubah Tidak Lengkap')
        window.location='./../../admin/barang'</script>";
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE barang SET nama='$nama', jenis='$jenis', suplier='$suplier', modal='$modal', harga='$harga', jumlah='$jumlah', sisa='$sisa', deskripsi='$deskripsi', warna='$warna', deskripsi2='$deskripsi2', meta_key='$meta_key', meta_des='$meta_des' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Data Berhasil DI Ubah')
        window.location='./../../admin/barang'</script>";	
	}
}
?>
<?php
// including the database koneksi file
include_once("./../../config.php");


if(isset($_POST['update2']))
{	
	
    $id = $_POST['id'];
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $gambar = "foto_barang/".$acak.$foto;
     $direktori   = "../../foto_barang/".$gambar;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto_barang/".$acak.$_FILES['foto']['name']);

	if(empty($userfile)) {
				
		echo "<script>window.alert('Data Yang  DI Ubah Tidak Lengkap')
        window.location='./../../admin/barang'</script>";
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE barang SET gambar='$gambar' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Data Berhasil DI Ubah')
        window.location='./../../admin/barang'</script>";	
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

  <title>AdminLTE 3 | Edit Foto Projek | <?php echo $nama;?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="../../ckeditor/style.css">
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
	$result=mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");
    while($res=mysqli_fetch_array($result))
    {
        $id = $res['id'];
        $nama = $res['nama'];
        $jenis = $res['jenis'];
        $suplier = $res['suplier'];
        $modal = $res['modal'];
        $harga = $res['harga'];
        $jumlah = $res['jumlah'];
        $tgl_input = $res['tgl_input'];
        $sisa = $res['sisa'];
        $deskripsi = $res['deskripsi'];
        $warna = $res['warna'];
        $deskripsi2 = $res['deskripsi2'];
        $meta_key = $res['meta_key'];
        $meta_des = $res['meta_des'];
        $gambar = $res['gambar'];
        
    }
?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Barang</li>
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
              
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ubah barang</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Ubah Foto barang </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
              
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <form action="../barang/<?php echo addslashes($id);?>" method="POST" enctype='multipart/form-data'  class="form-horizontal">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama  Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="nama" value="<?php echo $nama; ?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Jenis  Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="jenis" value="<?php echo $jenis; ?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">suplier  Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="suplier" value="<?php echo $suplier; ?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">modal  Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="modal" value="<?php echo $modal; ?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">harga  Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="harga" value="<?php echo $harga; ?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">modal  Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="jumlah" value="<?php echo $jumlah; ?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">sisa  Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="sisa" value="<?php echo $sisa; ?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">tgl input  Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="tgl_input" readonly value="<?php echo $tgl_input; ?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Keterangan Barang</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="deskripsi2"><?php echo $deskripsi2; ?></textarea>
                        </div>
                      </div>  
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Deskripsi Barang</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="deskripsi"><?php echo $deskripsi; ?></textarea>
                        </div>
                      </div>       
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">warna  Barang</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="warna">
					<option value="<?php echo $warna; ?>"><?php echo $warna; ?></option>
                    <option value="black">black</option>
                    <option value="white">white</option>
                    <option value="silver">silver</option>
                    <option value="grey">grey</option>
                    <option value="blue">blue</option>
                    <option value="green">green</option>
                    <option value="yellow">yellow</option>
                    <option value="gold">gold</option>
                    <option value="orange">orange</option>
                    <option value="brown">brown</option>
                    <option value="red">red</option>
                    <option value="maroon">maroon</option>
                    <option value="rose">rose</option>
                    <option value="pink">pink</option>
					</select>
                        </div>
                      </div>
                     
                      <div class="form-group row">
                      
                        <label for="inputExperience" class="col-sm-2 col-form-label"> *Seo Google</label>
                        <div class="col-sm-10">
                        <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Info</h5>
                 -Isi Meta Keywoar Contoh: Judul dari yg ingin di buat
                 <p>
                 -Isi Meta Deskripsi Contoh: Penjelasan Dari Artikelnya
                </div>
                        </div>
                      </div>
                      <div class="form-group row">
                      
                        <label for="inputExperience" class="col-sm-2 col-form-label">Meta keywoard</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="meta_key"><?php echo $meta_key ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Meta Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="meta_des"><?php echo $meta_des ?></textarea>
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
                  <div class="tab-pane" id="timeline">
                    <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Foto Projek</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../barang/<?php echo addslashes($id);?>" method="POST" enctype='multipart/form-data' role="form">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="card-body">
                <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <img src="../../<?php echo $gambar; ?>" style="width:200px;height:200;"> 
                        </div>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kalau Tidak DI Ubah Lewatin aja</label>
                    
                  </div>
                  <div class="col-sm-10">
                  <input type="file" id="foto" name="foto"  class="form-control-file" onchange="PreviewImage();">
                        </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="update2" value="update2">Update</button>
                </div>
              </form>
            </div>
        
           
            
                  </div>
                  <!-- /.tab-pane -->

                
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
