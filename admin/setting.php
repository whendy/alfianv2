<?php
session_start();

if( !isset($_SESSION['saya_admin']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$id = ( isset($_SESSION['id']) ) ? $_SESSION['id'] : '';
$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
$userfile = ( isset($_SESSION['userfile']) ) ? $_SESSION['userfile'] : '';
$keterangan = ( isset($_SESSION['keterangan']) ) ? $_SESSION['keterangan'] : '';
$hak_akses = ( isset($_SESSION['hak_akses']) ) ? $_SESSION['hak_akses'] : '';
$username = ( isset($_SESSION['username']) ) ? $_SESSION['username'] : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Pengaturan Website | <?php echo $nama;?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 
  <script type="text/javascript" src="./../ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="./../ckeditor/style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<?php
// including the database koneksi file
include_once("./../config.php");

if(isset($_POST['update']))
{	
	

    $nama = $_POST['nama'];
    $penjelasan = $_POST['penjelasan'];
    $sosial_ig = $_POST['sosial_ig'];
    $sosial_fb = $_POST['sosial_fb'];
    $sosial_twitter = $_POST['sosial_twitter'];
    $meta_key = $_POST['meta_key'];
    $meta_des = $_POST['meta_des'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $alamat = $_POST['alamat'];
    $maps = $_POST['maps'];
   
   
   

	// checking empty fields
	if(empty($nama) || empty($penjelasan) || empty($sosial_ig) ||  empty($sosial_fb) || empty($sosial_twitter) || empty($meta_key) || empty($meta_des) || empty($email) || empty($no) || empty($alamat) || empty($maps)) {

        
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE setting SET nama='$nama', penjelasan='$penjelasan', sosial_ig='$sosial_ig',   sosial_fb='$sosial_fb', sosial_twitter='$sosial_twitter', meta_key='$meta_key', meta_des='$meta_des', email='$email', no='$no', alamat='$alamat', maps='$maps'");
    echo '<script>
    swal({
     title: "Good job!",
     text: "Pengaturan web Berhasil Berhasil DI Ubah",
     icon: "success",
     button: "oke!",
   }).then(function() {
     window.location = "";
   });
             </script>';
	}
}



?>
<?php
// including the database koneksi file
include_once("./../config.php");

if(isset($_POST['update2']))
{	
	
	
   
   
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $gambar = "foto_setting/".$acak.$foto;
     $direktori   = "./../foto_setting/".$gambar;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "./../foto_setting/".$acak.$_FILES['foto']['name']);

	// checking empty fields
	if(empty($gambar)) {
					
        
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE setting SET gambar='$gambar' ");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Gambar Berhasil DI Ubah')
        window.location=''</script>";	
	}
}
?>
<?php
// including the database koneksi file
include_once("./../config.php");

if(isset($_POST['update3']))
{	
	
	
   
   
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $gambar2 = "foto_setting/".$acak.$foto;
     $direktori   = "./../foto_setting/".$gambar2;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "./../foto_setting/".$acak.$_FILES['foto']['name']);

	// checking empty fields
	if(empty($gambar2)) {
					
        
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE setting SET gambar2='$gambar2' ");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Gambar Berhasil DI Ubah')
        window.location=''</script>";	
	}
}
?>
<?php
// including the database koneksi file
include_once("./../config.php");

if(isset($_POST['update4']))
{	
	
	
   
   
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $gambar3 = "foto_setting/".$acak.$foto;
     $direktori   = "./../foto_setting/".$gambar3;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "./../foto_setting/".$acak.$_FILES['foto']['name']);

	// checking empty fields
	if(empty($gambar3)) {
					
        
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE setting SET gambar3='$gambar3' ");
		
		//redirectig to the display page. In our case, it is view.php
    echo '<script>
    swal({
     title: "Good job!",
     text: "Pengaturan gambar web Berhasil Berhasil DI Ubah",
     icon: "success",
     button: "oke!",
   }).then(function() {
     window.location = "";
   });
             </script>';
	}
}
?>
<?php
//including the database koneksi file
include_once("./../config.php");
	$result=mysqli_query($mysqli, "SELECT * FROM setting");
    while($res=mysqli_fetch_array($result))
    {
        $nama = $res['nama'];
        $penjelasan = $res['penjelasan'];
        $sosial_ig = $res['sosial_ig'];
        $sosial_fb = $res['sosial_fb'];
        $sosial_twitter = $res['sosial_twitter'];
        $gambar = $res['gambar'];
        $meta_key = $res['meta_key'];
        $meta_des = $res['meta_des'];
        $email = $res['email'];
        $no = $res['no'];
        $alamat = $res['alamat'];
        $maps = $res['maps'];
        
    }
?>
<?php
include "menu/menu.php"
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header Page header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan Website</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan Website</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
        <div class="col-md-3">

<!-- Profile Image -->
<div class="card card-primary card-outline">
  <div class="card-body box-profile">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-circle"
           src="../<?php echo $gambar3 ?>"
           alt="User profile picture">
    </div>

    <h3 class="profile-username text-center"><?php echo $nama ?></h3>

    <p class="text-muted text-center">Software Engineer</p>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

<!-- About Me Box -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">About Me</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <strong><i class="fas fa-envelope mr-1"></i> email</strong>

    <p class="text-muted">
    <?php echo $email ?>
    </p>

    <hr>
    <strong><i class="fas fa-phone mr-1"></i> phone</strong>

<p class="text-muted">
<?php echo $no ?>
</p>

<hr>
    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

    <p class="text-muted"><?php echo $alamat ?></p>

    <hr>

    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

    <p class="text-muted">
    <?php echo $keterangan ?>
    </p>

    <hr>

    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
        <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Pengaturan Website</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Pengaturan Foto</a></li>
                </ul>
              </div><!-- /.card-header -->
             
              <div class="card-body">
             
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <form action="setting" method="POST" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Website</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="nama" value="<?php echo $nama; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Akun instagram</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="sosial_ig" value="<?php echo $sosial_ig; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Akun Facebook</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="sosial_fb" value="<?php echo $sosial_fb; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Akun twitter</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="sosial_twitter" value="<?php echo $sosial_twitter; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email"  value="<?php echo $email ?>">
                        </div>
                      </div>   
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No Telpon</label>
                        <div class="col-sm-10">
                        <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" name="no" value="<?php echo $no ?>">
                  </div>                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="alamat"><?php echo $alamat ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Penjelasan Web</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="penjelasan"><?php echo $penjelasan ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Maps Api Google</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="maps"><?php echo $maps ?></textarea>
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
                          <button type="submit" class="btn btn-danger" name="update" value="update">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Foto Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="setting" method="POST" enctype='multipart/form-data' role="form">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kalau Tidak DI Ubah Lewatin aja</label>
                    <img src="../<?php echo $gambar ?>" alt="">
                  </div>
                  <div class="form-group">
                                                   <input type="file" id="foto" name="foto"  class="form-control-file" onchange="PreviewImage();">
                                               </div> 
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="update2" value="update2">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Foto favicon</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="setting" method="POST" enctype='multipart/form-data' role="form">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kalau Tidak DI Ubah Lewatin aja</label>
                    <img src="../<?php echo $gambar2 ?>" alt="">
                  </div>
                  <div class="form-group">
                                                   <input type="file" id="foto" name="foto"  class="form-control-file" onchange="PreviewImage();">
                                               </div> 
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="update3" value="update3">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Foto About</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="setting" method="POST" enctype='multipart/form-data' role="form">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kalau Tidak DI Ubah Lewatin aja</label>
                    <img src="../<?php echo $gambar3 ?>" style="width:200px;height:200px;">
                  </div>
                  <div class="form-group">
                                                   <input type="file" id="foto" name="foto"  class="form-control-file" onchange="PreviewImage();">
                                               </div> 
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="update4" value="update4">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
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
</body>
</html>
