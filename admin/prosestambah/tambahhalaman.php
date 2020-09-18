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

  <title>AdminLTE 3 | Tambah Halaman | <?php echo $nama;?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
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
    $category_id    =  e($_POST['category_id']);
    $page_title    =  e($_POST['page_title']);
    $page_content    =  e($_POST['page_content']);
    $meta_description    =  e($_POST['meta_description']);
    $meta_keywords    =  e($_POST['meta_keywords']);
    $active    =  e($_POST['active']);
    
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
    $acak           = mt_rand(1,999999);
     $page_gambar = "foto_halaman/".$acak.$foto;
     $direktori   = "../../foto_halaman/".$page_gambar;
    move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto_halaman/".$acak.$_FILES['foto']['name']);
    // form validation: ensure that the form is correctly filled
    if(empty($category_id) || empty($page_title) || empty($page_content) || empty($meta_description) || empty($meta_keywords) || empty($active) || empty($page_gambar)) {
				
      echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Tambah  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "";
  });
            </script>';
    } else {	 
    // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['category_id'])) {
            $category_id = e($_POST['category_id']);
            $query = "INSERT INTO pages (category_id, page_title, page_content, meta_description, meta_keywords, active, page_gambar) 
                      VALUES('$category_id', '$page_title', '$page_content', '$meta_description', '$meta_keywords', '$active', '$page_gambar')";
            mysqli_query($conn, $query);           
    echo '<script>
    swal({
     title: "Good job!",
     text: " halaman Berhasil DI Tambah",
     icon: "success",
     button: "oke!",
   }).then(function() {
     window.location = "../admin/halaman";
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
// escape string
function e($val){
    global $conn;
    return mysqli_real_escape_string($conn, trim($val));
}
?>
<?php
include "../menu/menu.php"
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Halaman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Halaman</li>
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
                  <form action="tambahhalaman" method="POST" enctype='multipart/form-data'  class="form-horizontal">
                  
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Kategori Halaman</label>
                        <div class="col-sm-10">
                        <select name="category_id" id="category_id"  class="form-control show-tick ms select2" data-placeholder="Select">
                                <option value="0">Please select</option>
                                <?php
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM categories  ");
while($res = mysqli_fetch_array($result))
{
?>
<option value="<?php echo $res['category_id']?>"><?php echo $res['category_name'] ?></option>
<?php

}
?>
                                </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="page_title">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Penjelasan Halaman</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="page_content"></textarea>
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
                          <textarea class="form-control" name="meta_description"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Meta Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="meta_keywords"></textarea>
                        </div>
                      </div>      
                     
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Aktivasi</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="active">
					<option value="yes">Pilih Aktivasi</option>
                    <option value="yes">Ya</option>
                    <option value="no">tidak</option>
                    
					</select>
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
