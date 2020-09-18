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

<?php
include "../../config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Tambah Baner/Slider | <?php echo $nama;?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type="text/javascript" src="./../ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="./../ckeditor/style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<?php
include "../menu/menu.php"
?>
<?php 

// connect to database
include_once("../../config.php");

$errors   = array();
$success   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['Submit'])) {
    Submit();
}



// REGISTER USER
function Submit(){
    global $conn, $errors;
    global $conn, $success;
    
    // receive all input values from the form
    $nama_baner    =  e($_POST['nama_baner']);
    $penulis_baner    =  e($_POST['penulis_baner']);
    $tgl_baner    =  e($_POST['tgl_baner']);
    $isi_baner    =  e($_POST['isi_baner']);
    $meta_key_baner    =  e($_POST['meta_key_baner']);
    $meta_des_baner    =  e($_POST['meta_des_baner']);
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $gambar_baner = "foto_baner/".$acak.$foto;
     $direktori   = "../../foto_baner/".$gambar_baner;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto_baner/".$acak.$_FILES['foto']['name']);

    if(empty($nama_baner) || empty($penulis_baner) || empty($tgl_baner) || empty($isi_baner) || empty($meta_key_baner) || empty($meta_des_baner) || empty($gambar_baner)) {
				
      echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "";
  });
            </script>';
    } else {	

    // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['nama_baner'])) {
            $nama_baner = e($_POST['nama_baner']);
            $query = "INSERT INTO baner (nama_baner, penulis_baner, tgl_baner, isi_baner, meta_key_baner, meta_des_baner, gambar_baner) 
                      VALUES('$nama_baner', '$penulis_baner', '$tgl_baner', '$isi_baner', '$meta_key_baner', '$meta_des_baner', '$gambar_baner')";
            mysqli_query($conn, $query);
            echo '<script>
  swal({
   title: "Good job!",
   text: "Baner/Slider Berhasil DI Tambah",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "../admin/baner";
 });
           </script>';
            
            
        }
      }
    }

}

// return user array from their id
function getUserById($id){
    global $conn;

}

// LOGIN USER


// escape string
function e($val){
    global $conn;
    return mysqli_real_escape_string($conn, trim($val));
}




?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Baner/Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Baner/Slider</li>
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
                  <form action="tambahbaner" method="POST" enctype='multipart/form-data'  class="form-horizontal">   
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Judul Slider/Baner</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="nama_baner" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Penerbit </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="penulis_baner" readonly value="<?php echo $nama_user; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Tgl Input</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="tgl_baner" readonly value="<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo date("d M Y", $tanggal);
?>" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Penjelasan slider/Baner</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="isi_baner"></textarea>
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
                          <textarea class="form-control" name="meta_key_baner"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Meta Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="meta_des_baner"></textarea>
                        </div>
                      </div>     
                      <div class="form-group">
                    <label for="exampleInputPassword1">Tambah Gambar</label>                   
                  </div>
                  <div class="form-group">
                                                   <input type="file" id="foto" name="foto"  class="form-control-file" onchange="PreviewImage();">
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
                          <button type="submit" class="btn btn-danger" name="Submit" value="add">Submit</button>
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

</body>
</html>
