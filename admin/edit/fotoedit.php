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

  <title>AdminLTE 3 | Edit Foto Projek | <?php echo $nama;?></title>

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
	
    $id = $_POST['id'];
    $foto_nama		= $_POST['foto_nama'];
    $isi		= $_POST['isi'];
    $meta_key		= $_POST['meta_key'];
    $meta_des		= $_POST['meta_des'];
    $idkategori		= $_POST['idkategori'];

	if(empty($foto_nama) || empty($isi) || empty($meta_key) || empty($meta_des) || empty($idkategori)) {
				
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
		$result = mysqli_query($mysqli, "UPDATE foto SET foto_nama='$foto_nama', isi='$isi', meta_key='$meta_key', meta_des='$meta_des', idkategori='$idkategori' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
    echo '<script>
    swal({
     title: "Good job!",
     text: "Foto Projek Berhasil DI Ubah",
     icon: "success",
     button: "oke!",
   }).then(function() {
     window.location = "./../../admin/foto";
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
	
    $id = $_POST['id'];
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 

    $acak           = mt_rand(1,999999);
     $userfile = "foto_upload/".$acak.$foto;
     $direktori   = "../../foto_upload/".$userfile;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto_upload/".$acak.$_FILES['foto']['name']);

	if(empty($userfile)) {
				
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
		$result = mysqli_query($mysqli, "UPDATE foto SET userfile='$userfile' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
    echo '<script>
    swal({
     title: "Good job!",
     text: "Foto Projek Berhasil DI Ubah",
     icon: "success",
     button: "oke!",
   }).then(function() {
     window.location = "./../../admin/foto";
   });
             </script>';
	}
}
?>

<?php
	include_once("./../../config.php");

    $id=addslashes($_GET['id']);
    $query=mysqli_query($mysqli, "select foto.id,foto.idkategori,foto.userfile,kategorifoto.namakategori,foto.foto_nama,foto.isi,foto.meta_key,foto.meta_des from kategorifoto,foto where (kategorifoto.idkategori=foto.idkategori) and (foto.id='$id')");
	
    $data=mysqli_fetch_array($query);
    $id=$data['id'];
	$idkategori=$data['idkategori'];
	$namakategori=$data['namakategori'];
	$foto_nama=$data['foto_nama'];
	$isi=$data['isi'];
	$meta_key=$data['meta_key'];
	$meta_des=$data['meta_des'];
    $userfile=$data['userfile'];


?>  
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Foto Projek</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Foto Projek</li>
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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ubah Projek</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Ubah Foto Prjek </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
              
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <form action="../foto/<?php echo addslashes($id);?>" method="POST" enctype='multipart/form-data'  class="form-horizontal">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Kategori Foto Projek</label>
                        <div class="col-sm-10">
                        <select name="idkategori" id="idkategori"  class="form-control show-tick ms select2" data-placeholder="Select">
                                <option value="<?php echo $idkategori; ?>">Please select|<?php echo $namakategori; ?></option>
                                <?php
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM kategorifoto  ");
while($res = mysqli_fetch_array($result))
{
?>
<option value="<?php echo $res['idkategori']?>"><?php echo $res['namakategori'] ?></option>
<?php

}
?>
                                </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama  Projek</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="foto_nama" value="<?php echo $foto_nama; ?>" >
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Penjelasan Projek</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="isi"><?php echo $isi; ?></textarea>
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
              <form action="../foto/<?php echo addslashes($id);?>" method="POST" enctype='multipart/form-data' role="form">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="card-body">
                <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <img src="../../<?php echo $userfile; ?>" style="width:200px;height:200;"> 
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
