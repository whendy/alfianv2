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

  <title>AdminLTE 3 | Tambah Barang | <?php echo $nama;?></title>

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
    $nama    =  e($_POST['nama']);
    $jenis    =  e($_POST['jenis']);
    $suplier    =  e($_POST['suplier']);
    $modal    =  e($_POST['modal']);
    $harga    =  e($_POST['harga']);
    $jumlah    =  e($_POST['jumlah']);
    $tgl_input    =  e($_POST['tgl_input']);
    $sisa    =  e($_POST['sisa']);
    $kode_barang    =  e($_POST['kode_barang']);
    $warna    =  e($_POST['warna']);
    $deskripsi    =  e($_POST['deskripsi']);
    $deskripsi2    =  e($_POST['deskripsi2']);
    $meta_key    =  e($_POST['meta_key']);
    $meta_des    =  e($_POST['meta_des']);

    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $gambar = "foto_barang/".$acak.$foto;
     $direktori   = "../../foto_barang/".$gambar;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "../../foto_barang/".$acak.$_FILES['foto']['name']);
 // form validation: ensure that the form is correctly filled
 if(empty($nama) || empty($jenis) || empty($suplier) || empty($modal) || empty($harga) || empty($jumlah) || empty($tgl_input) || empty($sisa) || empty($kode_barang) || empty($warna) || empty($deskripsi) || empty($deskripsi2) || empty($meta_key) || empty($meta_des)) {
				
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

        if (isset($_POST['nama'])) {
            $nama = e($_POST['nama']);
            $query = "INSERT INTO barang (nama, jenis, suplier, modal, harga, jumlah, tgl_input, sisa, gambar, kode_barang, warna, deskripsi, deskripsi2, meta_key, meta_des) 
                      VALUES('$nama', '$jenis', '$suplier', '$modal', '$harga', '$jumlah', '$tgl_input', '$sisa', '$gambar', '$kode_barang', '$warna', '$deskripsi', '$deskripsi2', '$meta_key', '$meta_des')";
            mysqli_query($conn, $query);
    echo '<script>
    swal({
     title: "Good job!",
     text: " barang Berhasil DI Tambah",
     icon: "success",
     button: "oke!",
   }).then(function() {
     window.location = "../admin/barang";
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

include_once("../../config.php");
// mencari kode barang dengan nilai paling besar
$query = "SELECT max(kode_barang) as maxKode FROM barang";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kode_barang = $data['maxKode'];
$noUrut = (int) substr($kode_barang, 7, 7);
$noUrut++;
$char = "PRODUK-";
$kode_barang = $char . sprintf("%04s", $noUrut);
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
            <h1>Tambah Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Barang</li>
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
                  <form action="tambahbarang" method="POST" enctype='multipart/form-data'  class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="kode_barang" readonly value="<?php echo $kode_barang; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="nama" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Jenis Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="jenis">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">suplier </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="suplier">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">modal perunit</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="modal"  >
                        </div>
                      </div>   
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Harga Jual</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="harga"  >
                        </div>
                      </div>   
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Jumlah Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="jumlah"  >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">jumlah Barang (input sama dengan yang di atas)</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="sisa"  >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">tgl input</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="tgl_input" readonly value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d : H:i');?>"  >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Spesifikasi Barang</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="deskripsi2"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Deskripsi Barang</label>
                        <div class="col-sm-10">
                          <textarea class="ckeditor" id="ckedtor" name="deskripsi"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Warna</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="warna">
					<option value="black">Pilih Warna Barang</option>
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
                          <textarea class="form-control" name="meta_key"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Meta Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="meta_des"></textarea>
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
