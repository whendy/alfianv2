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
include "../../config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Edit Baner/Slider | <?php echo $nama;?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="../../ckeditor/style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<?php
include "../menu/menu2.php"
?>
<?php
// including the database koneksi file
include_once("./../../config.php");


if(isset($_POST['update']))
{	
	
    $id_baner = $_POST['id_baner'];
    $nama_baner		= $_POST['nama_baner'];
    $isi_baner		= $_POST['isi_baner'];
    $meta_key_baner		= $_POST['meta_key_baner'];
    $meta_des_baner		= $_POST['meta_des_baner'];

	if(empty($nama_baner) || empty($isi_baner) || empty($meta_key_baner) || empty($meta_des_baner)) {
				
		echo '<script>
 swal({
  title: "Maaf!",
  text: "Data Yang Di ubah  Tidak Lengkap",
  icon: "error",
  button: "oke!",
}).then(function() {
  window.location = "";
});
					</script>';
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE baner SET nama_baner='$nama_baner', isi_baner='$isi_baner', meta_key_baner='$meta_key_baner', meta_des_baner='$meta_des_baner' WHERE id_baner=$id_baner");
		
		//redirectig to the display page. In our case, it is view.php
    echo '<script>
    swal({
     title: "Good job!",
     text: "Data Baner/Slider Berhasil DI Ubah",
     icon: "success",
     button: "oke!",
   }).then(function() {
     window.location = "./../../admin/baner";
   });
             </script>';
	}
}
?>
<?php
// including the database koneksi file
include_once("./../../config.php");


if(isset($_POST['update2']))
{	
	
    $id_baner = $_POST['id_baner'];
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 

    $acak           = mt_rand(1,999999);
     $gambar_baner = "foto_baner/".$acak.$foto;
     $direktori   = "../../foto_baner/".$gambar_baner;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto_baner/".$acak.$_FILES['foto']['name']);

	if(empty($gambar_baner)) {
				
    echo '<script>
    swal({
     title: "Maaf!",
     text: "Data Yang Di ubah  Tidak Lengkap",
     icon: "error",
     button: "oke!",
   }).then(function() {
     window.location = "";
   });
             </script>';
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE baner SET gambar_baner='$gambar_baner' WHERE id_baner=$id_baner");
		
		//redirectig to the display page. In our case, it is view.php
    echo '<script>
    swal({
     title: "Good job!",
     text: "Foto Baner/Slider Berhasil DI Ubah",
     icon: "success",
     button: "oke!",
   }).then(function() {
     window.location = "./../../admin/baner";
   });
             </script>';
	}
}
?>

<?php
//including the database koneksi file
include_once("./../../config.php");
$id_baner=$_GET['id_baner'];
	$result=mysqli_query($mysqli, "SELECT * FROM baner WHERE id_baner=$id_baner");
    while($res=mysqli_fetch_array($result))
    {
        $nama_baner = $res['nama_baner'];
        $isi_baner = $res['isi_baner'];
        $gambar_baner = $res['gambar_baner'];
        $meta_key_baner = $res['meta_key_baner'];
        $meta_des_baner = $res['meta_des_baner'];
    }
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Baner/Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Baner/Slider</li>
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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ubah Baner</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Ubah Foto Baner </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
              
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <form action="../baner/<?php echo addslashes($id_baner);?>" method="POST" enctype='multipart/form-data'  class="form-horizontal">
                  <input type="hidden" name="id_baner" value="<?php echo $id_baner; ?>">
                  
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama  Projek</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="nama_baner" value="<?php echo $nama_baner; ?>" >
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Penjelasan Projek</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="isi_baner"><?php echo $isi_baner; ?></textarea>
                        </div>
                      </div>       
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Meta keywoard</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="meta_key_baner"><?php echo $meta_key_baner ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Meta Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="meta_des_baner"><?php echo $meta_des_baner ?></textarea>
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
              <form action="../baner/<?php echo addslashes($id_baner);?>" method="POST" enctype='multipart/form-data' role="form">
              <input type="hidden" name="id_baner" value="<?php echo $id_baner; ?>">
                <div class="card-body">
                <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <img src="../../<?php echo $gambar_baner; ?>" style="width:200px;height:200;"> 
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
