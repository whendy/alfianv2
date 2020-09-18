<?php
session_start();

if( !isset($_SESSION['saya_user']) )
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
//including the database koneksi file
include_once("./../config.php");

?>
<!doctype html>
<html class="no-js " lang="en">

<?php
include "header/header.php"
?>
<?php
include "header/sidebar.php"
?>
<!-- Main Content -->
<section class="content blog-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Blog List
                    <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Foto</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 left-box">
            <?php

$result = mysqli_query($mysqli, "SELECT * FROM foto  ORDER BY id DESC");
?>
                <div class="card single_post">
                
                    <div class="body">
                        <div class="img-post m-b-15">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <?php
		while($res = mysqli_fetch_array($result)) {		
         
			
          echo '
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="./../'.$res['userfile'].'" alt="First slide">
                                    
                                        
                                    </div>  ';
        }?></div>
                                    
                              
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                           
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
    </div>
    <?php

$result = mysqli_query($mysqli, "SELECT * FROM foto  ORDER BY id DESC");
?>
    <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Images</strong></h2>                        
                    </div>
                    <div class="body m-b-20">
                        <div class="row">
                        <?php
		while($res = mysqli_fetch_array($result)) {		
         
			
          echo '
                            <div class="col-sm-2">
                                <p class="category">'.$res['nama'].'</p>
                                <div> <a href="./../'.$res['userfile'].'"> <img src="./../'.$res['userfile'].'" alt="Rounded Image" class="rounded"></a></div>
                                <p class="category">'.$res['isi'].'</p>
                            </div>';
                        }?>
                           
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- Jquery Core Js --> 
<?php
include "footer/footer.php"
?>
</body>

</html>

