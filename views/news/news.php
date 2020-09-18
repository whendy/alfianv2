<?php
session_start();
error_reporting("_ALL");
include "../../config.php"
?>
<!DOCTYPE html>
    <html lang="en">   
<head>
        <meta charset="utf-8" />
        <title><?php echo $nama; ?>- Blog/Artikel</title>
        <meta name="description" content="<?php echo $meta_des; ?>">
		<meta name="keywords" content="<?php echo $meta_key; ?>" />
<meta property="og:title" content="<?php echo $nama; ?> Blog/Artikel">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo $url; ?>">
		<meta property="og:description" content="<?php echo $meta_des; ?>">
		<meta property="og:image" content="<?php echo $gambar3; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Version" content="2.0" />
        <?php
include "../../menu/cssatas1.php"
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
include "../../menu/menu.php"
?>
        </header><!--end header-->
        <!-- Navbar End -->
        
         <!-- Hero Start -->
         <section class="bg-half-260 d-table w-100" style="background: url('27/images/work/bg-portfolio.jpg') center center;">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center mt-5 pt-4">
                            <h1 class="display-1 font-weight-bold mb-3">Blog/Artikel <span class="text-primary font-weight-bold"><?php echo $nama; ?></h1>
                            <p class="para-desc mx-auto h6">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container--> 
        </section><!--end section-->
        <!-- Hero End -->    

       
       


        <!-- Blog STart -->
        <section class="section">
        <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title mb-4"><img src="27/images/icon/blogger.svg" height="50" class="mr-3" alt="">Blog/Artikel<span class="text-primary font-weight-bold"> <span class="text-primary font-weight-bold"><?php echo $nama; ?></span></h4>
                        
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="mr-lg-2">
                            <div class="row">
                            <?php
$batas   = 10;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
	$posisi  = 0;
	$halaman = 1;
}
else{ 
  $posisi  = ($halaman-1) * $batas; 
}
$query  = "select post.idpost,post.tanggal_post,post.views,post.penulis,post.judul,post.isi,post.userfile,kategori.namakategori from post,kategori where post.idkategori=kategori.idkategori LIMIT $posisi,$batas";
$blog = mysqli_query($mysqli, $query);

?>
 <?php
 
 if(addslashes(isset($_GET['judul']))){
    $judul = addslashes($_GET['judul']);
    $blog = mysqli_query($mysqli,"select * from post where judul LIKE '%$judul%'");
    if (mysqli_num_rows($blog) == 0) {
       
        echo '<script>
                swal({
                 title: "Pencarian Gagal!",
                 text: "Kata Kunci Yang anda Cari Tidak Ada,Silahkan Ulangi.",
                 icon: "error",
                 button: "oke!",
               }).then(function() {
                 window.location = "blog";
               });
                         </script>';
    }
}
		while($blog_res = mysqli_fetch_array($blog)) {		
            $isi = strip_tags($blog_res['isi']);

            $des = htmlentities(strip_tags($blog_res['isi'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $isi = substr($des,0,100); // ambil sebanyak 220 karakter
            $isi= substr($des,0,strrpos($isi," ")); // potong per spasi kalimat
			
          echo '
                                <div class="col-lg-6 mb-4 pb-2">
                                    <div class="blog position-relative overflow-hidden shadow rounded">
                                        <div class="position-relative">
                                            <img src="'.$blog_res['userfile'].'" class="img-fluid rounded-top" alt="">
                                            <div class="overlay rounded-top bg-dark"></div>
                                        </div>
                                        <div class="content p-4">
                                            <h4><a href="blog/'.urlencode($blog_res['judul']).'" class="title text-dark">'.$blog_res['judul'].'</a></h4>
                                            <div class="post-meta mt-3">
                                                <a href="blog/'.urlencode($blog_res['judul']).'" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-eye-outline mr-1"></i>'.$blog_res['views'].'</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>'.$blog_res['namakategori'].'</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> '.$blog_res['penulis'].'</small>
                                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> '.$blog_res['tanggal_post'].'</small>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                ';
                              }?>
                               
            
                                <!-- PAGINATION START -->
                                <div class="col-12">                                
                                    <ul class="pagination justify-content-center mb-0 list-unstyled">
                                    <?php
 $query2     = mysqli_query($mysqli, "select * from post");
 $jmldata    = mysqli_num_rows($query2);
 $jmlhalaman = ceil($jmldata/$batas);
 
 if(!empty($halaman) && $halaman != 1)
{
$previous=$halaman-1;
echo '
                                        <li><a href="blog-p/'.$previous.'" class="pr-3 pl-3 pt-2 pb-2">Prev</a></li>';
                                      }
                                       for($i=1;$i<=$jmlhalaman;$i++)
                                       if ($i != $halaman){
                                           echo '
                                           <li><a href="blog-p/'.$i.'" class="pr-3 pl-3 pt-2 pb-2">'.$i.'</a></li>';
                                          }
                                          else{ 
                                             echo '
                                        <li class="active"><a href="#" class="pr-3 pl-3 pt-2 pb-2">'.$i.'</a></li>';

                                      }
                                      if($halaman < $jmlhalaman)
                                     {
                                     $next=$halaman+1;
                                     echo '
                                     <li><a href="blog-p/'.$next.'" class="pr-3 pl-3 pt-2 pb-2">Next</a></li>
                                     ';
                                    }
                                    
                                                      ?>     
                                    </ul><!--end pagination-->
                                </div><!--end col-->
                                <!-- PAGINATION END -->
                            </div>
                        </div>
                    </div>
                    <!-- BLog End -->

                    <!-- START SIDEBAR -->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="sidebar p-4 rounded shadow">
                            <!-- SEARCH -->
                            <div class="widget mb-4 pb-2">
                                <h4 class="widget-title">Search</h4>
                                <div id="search2" class="widget-search mt-4 mb-0">
                                    <form role="search"  method="get" id="searchform" class="searchform">
                                        <div>
                                            <input type="text" class="border rounded" name="judul" id="s" placeholder="Search Keywords...">
                                            <input type="submit" id="searchsubmit" value="Search">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- SEARCH -->

                            <!-- CATAGORIES -->
                            <div class="widget mb-4 pb-2">
                                <h4 class="widget-title">Catagories</h4>
                                <?php

$blogc = mysqli_query($mysqli, "select namakategori, kategori.idkategori, 
count(post.idkategori) as jml 
from kategori left join post 
on post.idkategori=kategori.idkategori 
group by idkategori");
?>
                                <ul class="list-unstyled mt-4 mb-0 blog-catagories">
                                <?php
		while($blogc_res = mysqli_fetch_array($blogc)) {	
            $idkategori=$blogc_res['idkategori'];		
          echo '
                                    <li><a href="blog/category/'.(urlencode($blogc_res['namakategori'])).'">'.$blogc_res['namakategori'].'</a> <span class="float-right">'.$blogc_res['jml'].'</span></li>
                                    ';
                                }?>
                                </ul>
                            </div>
                            <!-- CATAGORIES -->

                            <!-- RECENT POST -->
                            <div class="widget mb-4 pb-2">
                                <h4 class="widget-title">Artikel Terpopuler</h4>
                                <?php
$batas   = 6;
$query  = "select post.idpost,post.tanggal_post,post.penulis,post.judul,post.isi,post.userfile,kategori.namakategori from post,kategori where post.idkategori=kategori.idkategori order by views desc LIMIT $batas ";
$blog = mysqli_query($mysqli, $query);
?>
                                <div class="mt-4">
                                <?php
		while($blog_res = mysqli_fetch_array($blog)) {		
            $isi = strip_tags($blog_res['isi']);

            $des = htmlentities(strip_tags($blog_res['isi'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $isi = substr($des,0,100); // ambil sebanyak 220 karakter
            $isi= substr($des,0,strrpos($isi," ")); // potong per spasi kalimat
			
          echo '
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-left"> <a href="blog/'.urlencode($blog_res['judul']).'"> <img alt="img" src="'.$blog_res['userfile'].'" class="img-fluid rounded"></a></div>
                                        <div class="post-recent-content float-left"><a href="blog/'.urlencode($blog_res['judul']).'">'.($blog_res['judul']).'</a><span class="text-muted mt-2">'.($blog_res['tanggal_post']).'</span></div>
                                    </div>
                                    ';
                  }?>
                                </div>
                            </div>
                            <!-- RECENT POST -->

                          
                            
                            <!-- SOCIAL -->
                            <div class="widget">
                                <h4 class="widget-title">Follow us</h4>
                                <ul class="list-unstyled social-icon mt-4 mb-0">
                                    <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                   
                                </ul>
                            </div>
                            <!-- SOCIAL -->
                        </div>
                    </div><!--end col-->
                    <!-- END SIDEBAR -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->
      

     
     


     <!-- footer -->
     <?php
include "../../menu/footer.php"
?>
        <!-- footer -->
       
        <?php
include "../../menu/cssbawah1.php"
?>
    </body>

</html>