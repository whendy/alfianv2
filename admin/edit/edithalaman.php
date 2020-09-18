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
	
    $page_id = $_POST['page_id'];
    $category_id		= $_POST['category_id'];
    $page_title		= $_POST['page_title'];
    $page_content		= $_POST['page_content'];
    $meta_description		= $_POST['meta_description'];
    $meta_keywords		= $_POST['meta_keywords'];
    $active		= $_POST['active'];

	if(empty($category_id) || empty($page_title) || empty($page_content) || empty($meta_description) || empty($meta_keywords) || empty($active)) {
				
		echo "<script>window.alert('Data Yang  DI Ubah Tidak Lengkap')
        window.location='./../../admin/halaman'</script>";
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE pages SET category_id='$category_id', page_title='$page_title', page_content='$page_content', meta_description='$meta_description', meta_keywords='$meta_keywords', active='$active' WHERE page_id=$page_id");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Data Berhasil DI Ubah')
        window.location='./../../admin/halaman'</script>";	
	}
}
?>

<?php
// including the database koneksi file
include_once("./../../config.php");

if(isset($_POST['update2']))
{	
	
    $page_id = $_POST['page_id'];
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $page_gambar = "foto_halaman/".$acak.$foto;
     $direktori   = "../../foto_halaman/".$page_gambar;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto_halaman/".$acak.$_FILES['foto']['name']);


	if(empty($page_gambar)) {
				
		echo "<script>window.alert('Data Yang  DI Ubah Tidak Lengkap')
        window.location='./../../admin/halaman'</script>";
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE pages SET page_gambar='$page_gambar' WHERE page_id=$page_id");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Data Berhasil DI Ubah')
        window.location='./../../admin/halaman'</script>";	
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

  <title>AdminLTE 3 | Edit Halaman | <?php echo $nama;?></title>

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
	include_once("./../../config.php");

    $page_id=addslashes($_GET['page_id']);
    $query=mysqli_query($mysqli, "select pages.page_id,pages.category_id,pages.page_gambar,categories.category_name,pages.page_title,pages.page_content,pages.meta_description,pages.meta_keywords,pages.active from categories,pages where (categories.category_id=pages.category_id) and (pages.page_id='$page_id')");
	
    $data=mysqli_fetch_array($query);
    $page_id=$data['page_id'];
	$category_id=$data['category_id'];
	$category_name=$data['category_name'];
	$page_title=$data['page_title'];
	$page_content=$data['page_content'];
	$meta_desc=$data['meta_description'];
	$meta_keywords=$data['meta_keywords'];
    $active=$data['active'];
    $page_gambar=$data['page_gambar'];


?>  
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Halaman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Halaman</li>
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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ubah Halaman</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Ubah Foto Halaman </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
              
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <form action="../halaman/<?php echo addslashes($page_id);?>" method="POST" enctype='multipart/form-data'  class="form-horizontal">
                  <input type="hidden" name="page_id" value="<?php echo $page_id; ?>">
                  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Kategori Halaman</label>
                        <div class="col-sm-10">
                        <select name="category_id" id="category_id"  class="form-control show-tick ms select2" data-placeholder="Select">
                                <option value="<?php echo $category_id; ?>">Please select|<?php echo $category_name; ?></option>
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
                          <input type="text" class="form-control"  name="page_title" value="<?php echo $page_title; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Penjelasan Halaman</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="page_content"><?php echo $page_content; ?></textarea>
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
                          <textarea class="form-control" name="meta_description"><?php echo $meta_keywords; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Meta Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="meta_keywords"><?php echo $meta_desc; ?></textarea>
                        </div>
                      </div>      
                     
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Aktivasi</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="active">
					<option value="<?php echo $active; ?>">Pilih Aktivasi | <?php echo $active; ?></option>
                    <option value="yes">Ya</option>
                    <option value="no">tidak</option>
                    
					</select>
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
              <form action="../halaman/<?php echo addslashes($page_id);?>" method="POST" enctype='multipart/form-data' role="form">
              <input type="hidden" name="page_id" value="<?php echo $page_id; ?>">
                <div class="card-body">
                <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <img src="../../<?php echo $page_gambar; ?>" style="width:200px;height:200;"> 
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
