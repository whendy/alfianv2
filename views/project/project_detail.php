<?php
include "../../config.php"
?> 
<?php
	
  $id=addslashes($_GET['id']);
  $query=mysqli_query($mysqli, "select * from foto where foto_nama='$id'");
  if (mysqli_num_rows($query) == 0) {
    echo '<meta http-equiv="refresh" content="0; url=../projek">';
}
$data=mysqli_fetch_array($query);
$foto_nama=$data['foto_nama'];
$isi=$data['isi'];
$userfile=$data['userfile'];
$meta_key = $data['meta_key'];
$meta_des = $data['meta_des'];
?>  
<!DOCTYPE html>
    <html lang="en">   
<head>
        <meta charset="utf-8" />
        <title><?php echo $nama; ?> - <?php echo $foto_nama; ?></title>
        <meta name="description" content="<?php echo $meta_des; ?>">
		<meta name="keywords" content="<?php echo $meta_key; ?>" />
<meta property="og:title" content="<?php echo $nama; ?> -  <?php echo $meta_key; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo $url; ?>">
		<meta property="og:description" content="<?php echo $meta_des; ?>">
		<meta property="og:image" content="<?php echo $url; ?>/<?php echo $gambar_barang; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Version" content="2.0" />
        <?php
include "../../menu/cssatas2.php"
?>

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky bg-white">
        <?php
include "../../menu/menu2.php"
?>
        </header><!--end header-->
        <!-- Navbar End -->
        
       

        <!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Projek <?php echo $nama; ?> | <span class="text-primary font-weight-bold"><?php echo $foto_nama; ?></span> </h4>
                            <ul class="list-unstyled mt-4">
                                <li class="list-inline-item h6 date text-muted"> <span class="text-dark">Date : <?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo date("d M Y", $tanggal);
?> </li>
                            </ul>
                            <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                <li><a href="../" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                <li><a href="../projek" class="text-uppercase font-weight-bold text-dark">Projek</a></li>

                                
                                <li>
                                    <span class="text-uppercase text-primary font-weight-bold"><?php echo $foto_nama; ?></span> 
                                </li> 
                            </ul>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
 <!-- How It Work Start -->
 <section class="section bg-light border-bottom">
            <div class="container">    
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <img src="../<?php echo $userfile; ?>" alt="">
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ml-lg-5">
                            <h4 class="title mb-4"><?php echo $foto_nama; ?></h4>
                            <p><?php echo $isi; ?></p>
                           
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

      
        </section><!--end section-->
        <!-- How It Work End -->
       
        <!-- footer -->
        <?php
include "../../menu/footer2.php"
?>
        <!-- footer -->

        
       <!-- cssbawah -->
        <?php
include "../../menu/cssbawah2.php"
?>
<!-- cssbawah -->
    </body>

</html>