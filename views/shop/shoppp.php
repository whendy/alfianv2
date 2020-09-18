<?php
session_start();
error_reporting("_ALL");
include "../../config.php"
?>
<!DOCTYPE html>
    <html lang="en">   
<head>
        <meta charset="utf-8" />
        <title><?php echo $nama; ?>- Shop</title>
        <meta name="description" content="<?php echo $meta_des; ?>">
		<meta name="keywords" content="<?php echo $meta_key; ?>" />
<meta property="og:title" content="<?php echo $nama; ?> Foto Shop">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo $url; ?>">
		<meta property="og:description" content="<?php echo $meta_des; ?>">
		<meta property="og:image" content="<?php echo $gambar3; ?>">
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
         <section class="bg-half-260 d-table w-100" style="background: url('../27/images/work/bg-portfolio.jpg') center center;">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center mt-5 pt-4">
                            <h1 class="display-1 font-weight-bold mb-3">Produk <span class="text-primary font-weight-bold"><?php echo $nama; ?></h1>
                            <p class="para-desc mx-auto h6">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container--> 
        </section><!--end section-->
        <!-- Hero End -->    

       
       
        <!-- Pricing Start -->
     <section class="section" id="pricing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000"> <img src="../27/images/icon/cart.svg" height="50" class="mr-3" alt=""> Produk <span class="text-primary font-weight-bold"><?php echo $nama; ?></span> </h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <?php
$batas   = 8;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
	$posisi  = 0;
	$halaman = 1;
}
else{ 
  $posisi  = ($halaman-1) * $batas; 
}

$query  = "SELECT * FROM barang ORDER BY id DESC LIMIT $posisi,$batas ";
$barang = mysqli_query($mysqli, $query);
if (mysqli_num_rows($barang) == 0) {
    echo '<script>
                swal({
                 title: "Gagal!",
                 text: "Maaf Data yang Anda Cari tidak ADa.",
                 icon: "error",
                 button: "oke!",
               }).then(function() {
                 window.location = "../shop";
               });
                         </script>';
}
?>
                <div class="row">
                <?php
		while($barang_res = mysqli_fetch_array($barang)) {		
            $deskripsi = strip_tags($barang_res['deskripsi']);

            $des = htmlentities(strip_tags($barang_res['deskripsi'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $deskripsi = substr($des,0,50); // ambil sebanyak 220 karakter
            $deskripsi= substr($des,0,strrpos($deskripsi," ")); // potong per spasi kalimat
			
          echo '

                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="pricing-rates business-rate shadow bg-light p-4 rounded">
                            <h2 class="title text-uppercase mb-4">'.$barang_res['nama_barang'].'</h2>
                            <img src="../'.$barang_res['gambar_barang'].'" class="img-fluid rounded-top" alt="">
                            <div class="d-flex mb-4">
                                
                                <span class="h4 align-self-end mb-1">Rp.'.(number_format($barang_res['harga'])).'</span>
                               
                            </div>
                          
                            <span>Tanggal input : '.$barang_res['tgl_input'].'</span>
                            <p>
                            <span>Stok : '.$barang_res['jumlah'].'</span>
                            <p class="text-muted para-desc mx-auto">'.$deskripsi.'</p>
                            <a href="../shop/'.(urlencode($barang_res['nama_barang'])).'" class="btn btn-primary mt-4"> <img src="../27/images/icon/cart.svg" height="50" class="mr-3" alt="">Cek Detail</a>
                        </div>
                    </div><!--end col-->
                    ';
                  }?>

                </div><!--end row-->
               <p>
                   
            </div><!--end container-->
             <!-- PAGINATION START -->
             <div class="col-12">                                
                                    <ul class="pagination justify-content-center mb-0 list-unstyled">
                                    <?php
 $query2     = mysqli_query($mysqli, "select * from barang");
 $jmldata    = mysqli_num_rows($query2);
 $jmlhalaman = ceil($jmldata/$batas);
 
 if(!empty($halaman) && $halaman != 1)
{
$previous=$halaman-1;
echo '
                                        <li><a href="../shop-p/'.$previous.'" class="pr-3 pl-3 pt-2 pb-2">Prev</a></li>';
                                      }
                                       for($i=1;$i<=$jmlhalaman;$i++)
                                       if ($i != $halaman){
                                           echo '
                                           <li><a href="../shop-p/'.$i.'" class="pr-3 pl-3 pt-2 pb-2">'.$i.'</a></li>';
                                          }
                                          else{ 
                                             echo '
                                        <li class="active"><a href="#" class="pr-3 pl-3 pt-2 pb-2">'.$i.'</a></li>';

                                      }
                                      if($halaman < $jmlhalaman)
                                     {
                                     $next=$halaman+1;
                                     echo '
                                     <li><a href="../shop-p/'.$next.'" class="pr-3 pl-3 pt-2 pb-2">Next</a></li>
                                     ';
                                    }
                                    
                                                      ?>     
                                    </ul><!--end pagination-->
                                </div><!--end col-->
                                <!-- PAGINATION END -->
        </section><!--end section-->
        <!-- Pricing End -->
       
      

     
     


     <!-- footer -->
     <?php
include "../../menu/footer2.php"
?>
        <!-- footer -->
       
        <?php
include "../../menu/cssbawah2.php"
?>
    </body>

</html>