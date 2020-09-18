<?php
session_start();

if( !isset($_SESSION['saya_admin']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$id = ( isset($_SESSION['id']) ) ? $_SESSION['id'] : '';
$nama_user = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
$email = ( isset($_SESSION['email']) ) ? $_SESSION['email'] : '';
$userfile = ( isset($_SESSION['userfile']) ) ? $_SESSION['userfile'] : '';
$no = ( isset($_SESSION['no']) ) ? $_SESSION['no'] : '';
$alamat = ( isset($_SESSION['alamat']) ) ? $_SESSION['alamat'] : '';
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

  <title>AdminLTE 3 | Profile | <?php echo $nama_user;?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<?php
// including the database koneksi file
include_once("./../config.php");

if(isset($_POST['update']))
{	
	
	
    $nama_user = $_POST['nama_user'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    // $password = $_POST['password'];
    $hak_akses = $_POST['hak_akses'];
    $no = $_POST['no'];
    $keterangan = $_POST['keterangan'];
    $alamat = $_POST['alamat'];
   
   

	// checking empty fields
	if(empty($nama_user) || empty($email) || empty($username) ||  empty($hak_akses) || empty($no) || empty($keterangan) || empty($alamat)) {
				
    echo '<script>
    swal({
     title: "Maaf!",
     text: "Data Profile Yang Di ubah  Tidak Lengkap",
     icon: "error",
     button: "oke!",
   }).then(function() {
     window.location = "";
   });
             </script>';

        
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET nama_user='$nama_user', email='$email', username='$username',   hak_akses='$hak_akses', no='$no', keterangan='$keterangan', alamat='$alamat' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
    echo '<script>
    swal({
     title: "Good job!",
     text: "Data Profile Berhasil Berhasil DI Ubah",
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
    
     $userfile = "foto/".$foto;
     $direktori   = "./../foto/".$userfile;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "./../foto/".$_FILES['foto']['name']);

	// checking empty fields
	if(empty($userfile)) {
				
		
       
        if(empty($userfile)) {
          echo '<script>
          swal({
           title: "Maaf!",
           text: "Data Foto Yang Di ubah  Tidak Lengkap",
           icon: "error",
           button: "oke!",
         }).then(function() {
           window.location = "";
         });
                   </script>';
        }

        
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET userfile='$userfile' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
    echo '<script>
    swal({
     title: "Good job!",
     text: "Foto Profile Berhasil Berhasil DI Ubah",
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
include './../config.php';
if(isset($_POST['update3']))
{	
$user=$_POST['user'];
$lama=SHA1($_POST['lama']);
$baru=$_POST['baru'];
$ulang=$_POST['ulang'];

$cek = mysqli_query($mysqli, "select * from users where password='$lama' and username='$user'");
if(mysqli_num_rows($cek)==1){
	if($baru==$ulang){
        $b = SHA1($baru);
        $result = mysqli_query($mysqli, "update users set password='$b' where username='$user'");
        echo '<script>
        swal({
         title: "Good job!",
         text: "Password Berhasil Di ubah",
         icon: "success",
         button: "oke!",
       }).then(function() {
         window.location = "";
       });
                 </script>';
	}else{
		
    echo '<script>
    swal({
     title: "Maaf!",
     text: "Psw Tidak Sama",
     icon: "error",
     button: "oke!",
   }).then(function() {
     window.location = "";
   });
             </script>';
	}
}else{
  echo '<script>
  swal({
   title: "Maaf!",
   text: "Ganti Psw Gagal",
   icon: "error",
   button: "oke!",
 }).then(function() {
   window.location = "";
 });
           </script>';
}
}
 ?>
<?php
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

    $nama_user = $res['nama_user'];
    $email = $res['email'];
    $username = $res['username'];
    $password = $res['password'];
    $hak_akses = $res['hak_akses'];
    $userfile = $res['userfile'];
    $no = $res['no'];
    $keterangan = $res['keterangan'];
    $alamat = $res['alamat'];
    $userfile = $res['userfile'];
    
    
	
}
?>
<?php
include "menu/menu2.php"
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
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
                       src="../../<?php echo $userfile ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $nama_user ?></h3>

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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Pengaturan Akun</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Pengaturan Foto</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Pengaturan Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <form action="../profile/<?php echo $id;?>" method="POST" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="nama_user" value="<?php echo $nama_user ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email"  value="<?php echo $email ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="username"  value="<?php echo $username ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Hak akses</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="hak_akses"  readonly value="<?php echo $hak_akses ?>">
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
                        <label for="inputExperience" class="col-sm-2 col-form-label">Keterangan,Skill</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="keterangan"><?php echo $keterangan ?></textarea>
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
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../profile/<?php echo $id;?>" method="POST" enctype='multipart/form-data' role="form">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kalau Tidak DI Ubah Lewatin aja</label>
                    <img src="../../<?php echo $userfile ?>" alt="">
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
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form action="../profile/<?php echo $id;?>" method="post" class="form-horizontal">
                    <div class="form-group">
                            <input name="user" type="hidden" value="<?php echo $_SESSION['username']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="lama" placeholder="Psw Lama  | Kosongkan Bila Tidak DI Ubah" >
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="baru" placeholder="New Password | Kosongkan Bila Tidak DI Ubah" >
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="ulang" placeholder="Ulangi Password | Kosongkan Bila Tidak DI Ubah" >
                                </div>
                      
                     
                          <button type="submit" name="update3" value="simpan" class="btn btn-danger">Submit</button>
                      
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
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
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="../dist/js/pages/dashboard2.js"></script>
</body>
</html>
