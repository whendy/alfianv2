<?php
include "../../config.php"
?> 
<?php
	
    $id=addslashes($_GET['id']);
    $query=mysqli_query($mysqli, "select * from barang where nama_barang='$id'");
	if (mysqli_num_rows($query) == 0) {
        echo '<meta http-equiv="refresh" content="0; url=../shop">';
    }
	    $res=mysqli_fetch_array($query);
	    $id = $res['id'];
        $nama_barang = $res['nama_barang'];
        $jenis = $res['jenis'];
        $suplier = $res['suplier'];
        $harga = $res['harga'];
        $jumlah = $res['jumlah'];
        $tgl_input = $res['tgl_input'];
        $deskripsi = $res['deskripsi'];
        $warna = $res['warna'];
        $deskripsi2 = $res['deskripsi2'];
        $meta_key = $res['meta_key'];
        $meta_des = $res['meta_des'];
        $gambar_barang = $res['gambar_barang'];

?>  
<!DOCTYPE html>
    <html lang="en">   
<head>
        <meta charset="utf-8" />
        <title><?php echo $nama; ?> - <?php echo $nama_barang; ?></title>
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
                            <h4 class="title"> Shop <?php echo $nama; ?> | <span class="text-primary font-weight-bold"><?php echo $nama_barang; ?></span> </h4>
                            <ul class="list-unstyled mt-4">
                                <li class="list-inline-item h6 date text-muted"> <span class="text-dark">Date :</span> <?php echo $tgl_input; ?></li>
                            </ul>
                            <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                <li><a href="../" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                <li><a href="../shop" class="text-uppercase font-weight-bold text-dark">Shop</a></li>

                                
                                <li>
                                    <span class="text-uppercase text-primary font-weight-bold"><?php echo $nama_barang; ?></span> 
                                </li> 
                            </ul>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
 <!-- Gallery Start -->
 <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="slider slider-for">
                            <div><img src="../<?php echo $gambar_barang; ?>" class="img-fluid rounded" alt=""></div>            
                        </div>
                       
                    </div><!--end col-->

                    <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ml-md-4">
                            <h4 class="title mb-4"><?php echo $nama_barang; ?></h4>
                            <div class="mt-4">
                                <div class="float-right text-warning">
                                    <span class="text-muted pl-3">Stok : <?php echo $jumlah; ?>  </span>
                                </div>
                                <h4 class="mt-4"><b>Rp. <?php echo (number_format($harga)); ?></b></h4>
                            </div>
                            <ul class="list-unstyled feature-list text-muted">
                                <li><i class="mdi mdi-check mr-2"></i><?php echo $deskripsi2; ?></li>
                                
                            </ul>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-primary"><img src="../27/images/icon/whatsapp.svg" height="50" class="mr-3" alt=""> Buy Now</a>
                            </div>
                            
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Deskripsi</h4>
                            <p><?php echo $deskripsi; ?></p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--END container-->
        </section><!--end section-->
        <!-- Gallery End -->
       
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