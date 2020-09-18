<?php
session_start();
error_reporting("_ALL");
include "config.php"
?>
<!DOCTYPE html>
    <html lang="en">   
<head>
        <meta charset="utf-8" />
        <title><?php echo $nama; ?></title>
        <meta name="description" content="<?php echo $meta_des; ?>">
		<meta name="keywords" content="<?php echo $meta_key; ?>" />
<meta property="og:title" content="<?php echo $nama; ?> -  <?php echo $meta_key; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo $url; ?>">
		<meta property="og:description" content="<?php echo $meta_des; ?>">
		<meta property="og:image" content="<?php echo $gambar3; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Version" content="2.0" />
        <?php
include "menu/cssatas1.php"
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
include "menu/menu.php"
?>
        </header><!--end header-->
        <!-- Navbar End -->
        
        

        <!-- Hero Start -->
        <section class="main-slider">
        <?php

$baner = mysqli_query($mysqli, "select * from baner  order by id_baner");
?>
            <ul class="slides"> 
            <?php
		while($baner_res = mysqli_fetch_array($baner)) {		
            $isi_baner = strip_tags($baner_res['isi_baner']);

            $des = htmlentities(strip_tags($baner_res['isi_baner'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $isi_baner = substr($des,0,150); // ambil sebanyak 220 karakter
            $isi_baner= substr($des,0,strrpos($isi_baner," ")); // potong per spasi kalimat
			
          echo '
               
                <li class="bg-slider d-flex align-items-center" style="background-image:url('.$baner_res['gambar_baner'].')">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <div class="title-heading text-white mt-4">
                                    <h1 class="display-4 title-dark font-weight-bold mb-3">'.$baner_res['nama_baner'].'</h1>
                                    <p class="para-desc para-dark mx-auto text-light">'.$isi_baner.'...</p>
                                    <div class="mt-4">
                                        <a href="baner/'.(urlencode($baner_res['nama_baner'])).'" class="btn btn-primary mt-2 mouse-down"><i class="mdi mdi-arrow-right"></i> Cek Selengkapnya</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </li>
                ';
            }?>
              
            </ul>
        </section><!--end section-->
        <!-- Hero End --> 
 <!-- FEATURES START -->
 <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="course-feature text-center position-relative d-block overflow-hidden bg-white rounded p-4 pt-5 pb-5">
                            <div class="icon">
                                <img src="27/images/icon/insurance.svg" class="avatar avatar-small" alt="">
                            </div>
                            
                            <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark"> Unlimited Access</a></h4>
                            <p class="text-muted">It is a long established fact that a reader will be of a page reader will be of a page when looking at its layout. </p>
                            <a href="javascript:void(0)" class="text-primary read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                            <img src="27/images/icon/insurance.svg" class="full-img" height="300" alt="">
                        </div>
                    </div><!--end col--> 
                    
                    <div class="col-md-4">
                        <div class="course-feature text-center position-relative d-block overflow-hidden bg-white rounded p-4 pt-5 pb-5">
                            <div class="icon">
                                <img src="27/images/icon/graduation-hat.svg" class="avatar avatar-small" alt="">
                            </div>
                            
                            <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark"> Our Courses</a></h4>
                            <p class="text-muted">It is a long established fact that a reader will be of a page when reader will be of a page looking at its layout. </p>
                            <a href="javascript:void(0)" class="text-primary read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                            <img src="27/images/icon/graduation-hat.svg" class="full-img" height="300" alt="">
                        </div>
                    </div><!--end col--> 
                    
                    <div class="col-md-4">
                        <div class="course-feature text-center position-relative d-block overflow-hidden bg-white rounded mb-0 p-4 pt-5 pb-5">
                            <div class="icon">
                                <img src="27/images/icon/ai.svg" class="avatar avatar-small" alt="">
                            </div>
                            
                            <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark"> Expert Teachers</a></h4>
                            <p class="text-muted">It is a long established fact that a reader will be of a page when reader will be of a page looking at its layout. </p>
                            <a href="javascript:void(0)" class="text-primary read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                            <img src="27/images/icon/ai.svg" class="full-img" height="300" alt="">
                        </div>
                    </div><!--end col--> 
                </div><!--end row-->
            </div><!--end container-->
            <br>
            <br>
            <br>
                    <!-- About Start -->

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 col-12">
                        <img src="<?php echo $gambar3; ?>" class="img-fluid rounded" alt="">
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ml-lg-4">
                            <h4 class="title mb-4">About <span class="text-primary font-weight-bold"><?php echo $nama; ?></span></h4>
                            <p class="text-muted"><?php echo $penjelasan; ?></p>
                            <a href="javascript:void(0)" class="btn btn-primary mt-3">Join now</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--enc container-->
            <!--end section-->
        </section><!--end section-->

         <!-- Work Start -->
         <section class="section">
         <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title mb-4"><img src="27/images/icon/image.svg" height="50" class="mr-3" alt="">Foto Projek <span class="text-primary font-weight-bold"><?php echo $nama; ?></span></h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <div class="container">
            <?php

$kafoto = mysqli_query($mysqli, "select * from kategorifoto where active='yes'");
?>
                <div class="row">
                    <ul class="col container-filter list-unstyled categories-filter text-center" id="filter">
                        <li class="list-inline-item"><a class="categories border d-block text-dark rounded active" data-filter="*">All</a></li>
                        <?php
		while($kafoto_res = mysqli_fetch_array($kafoto)) {		
           
			
          echo '
                        <li class="list-inline-item"><a class="categories border d-block text-dark rounded" data-filter=".'.$kafoto_res['namakategori'].'">'.$kafoto_res['namakategori'].'</a></li>
                        ';
                      }?>
                    </ul>
                </div><!--end row-->
            </div><!--end container-->
            <?php
$batas   = 8;
$query  = "select foto.id,foto.foto_nama,foto.isi,foto.userfile,kategorifoto.namakategori from foto,kategorifoto where foto.idkategori=kategorifoto.idkategori LIMIT $batas ";
$foto = mysqli_query($mysqli, $query);
?>
            <div class="container-fluid">
                <div class="row container-grid projects-wrapper">
                <?php
		while($foto_res = mysqli_fetch_array($foto)) {		
            $isi = strip_tags($foto_res['isi']);

            $des = htmlentities(strip_tags($foto_res['isi'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $isi = substr($des,0,50); // ambil sebanyak 220 karakter
            $isi= substr($des,0,strrpos($isi," ")); // potong per spasi kalimat
			
          echo '
                    <div class="col-lg-3 col-md-6 spacing '.$foto_res['namakategori'].'">
                        <div class="work-container position-relative d-block overflow-hidden rounded mt-3">
                            <a class="mfp-image d-inline-block" href="'.$foto_res['userfile'].'" title="">
                                <img src="'.$foto_res['userfile'].'" class="img-fluid rounded" alt="work-image">
                                <div class="overlay-work"></div>
                            </a>
                            <div class="content personal-port">
                                <a href="projek/'.(urlencode($foto_res['userfile'])).'" class="title text-white d-block font-weight-bold">Shifting Perspective</a>
                                <small class="text-light">'.$foto_res['namakategori'].'</small>
                            </div>
                            <div class="client personal-port">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i>'.$nama.'</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->
                    ';
                  }?>
                    
                </div><!--end row-->
            </div><!--end container-->

            <div class="row justify-content-center">
                    <div class="col-12 text-center mt-4 pt-2">
                        <a href="projek" class="btn btn-primary">Lihat Foto Projek Lainnya <i class="mdi mdi-arrow-right"></i></a>
                    </div><!--end col-->
                </div><!--end row-->
        </section><!--end section-->
        <!-- Work End -->
        <!-- About End -->
        <div class="container mt-100 mt-60" id="portfolio">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4"><img src="27/images/icon/blogger.svg" height="50" class="mr-3" alt=""> Blog/Artikel <span class="text-primary font-weight-bold"><?php echo $nama; ?></span></h4>
                            <p class="text-muted para-desc mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <?php
$batas   = 6;
$query  = "select post.idpost,post.tanggal_post,post.penulis,post.judul,post.isi,post.userfile,kategori.namakategori from post,kategori where post.idkategori=kategori.idkategori LIMIT $batas ";
$blog = mysqli_query($mysqli, $query);
?>
                <div class="row">
                <?php
		while($blog_res = mysqli_fetch_array($blog)) {		
            $isi = strip_tags($blog_res['isi']);

            $des = htmlentities(strip_tags($blog_res['isi'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $isi = substr($des,0,100); // ambil sebanyak 220 karakter
            $isi= substr($des,0,strrpos($isi," ")); // potong per spasi kalimat
			
          echo '
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="work-container position-relative d-block overflow-hidden rounded">
                            <a class="mfp-image d-inline-block" href="'.$blog_res['userfile'].'" title="">
                                <img src="'.$blog_res['userfile'].'" class="img-fluid rounded" alt="work-image">
                                <div class="overlay-work"></div>
                            </a>
                            <div class="content personal-port">
                                <a href="blog/'.urlencode($blog_res['judul']).'" class="title text-white d-block font-weight-bold">'.$blog_res['judul'].'</a>
                                <small class="text-light">'.$blog_res['namakategori'].'</small>
                                <p>
                                <small class="text-light">'.$isi.'</small>
                            </div>
                            <div class="client personal-port">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> '.$blog_res['penulis'].'</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> '.$blog_res['tanggal_post'].'</small>
                            </div>
                        </div>
                    </div><!--end col-->
                    ';
                  }?>
                   

                </div><!--end row-->
                <div class="row justify-content-center">
                    <div class="col-12 text-center mt-4 pt-2">
                        <a href="blog" class="btn btn-primary">Lihat Blog/Artikel Lainnya <i class="mdi mdi-arrow-right"></i></a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
      

     
     <!-- Pricing Start -->
     <section class="section" id="pricing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000"> <img src="27/images/icon/cart.svg" height="50" class="mr-3" alt=""> Produk <span class="text-primary font-weight-bold"><?php echo $nama; ?></span> </h4>
                            <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <?php
$batas   = 8;
$query  = "SELECT * FROM barang ORDER BY id DESC LIMIT $batas ";
$barang = mysqli_query($mysqli, $query);
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
                            <img src="'.$barang_res['gambar_barang'].'" class="img-fluid rounded-top" alt="">
                            <div class="d-flex mb-4">
                                
                                <span class="h4 align-self-end mb-1">Rp.'.(number_format($barang_res['harga'])).'</span>
                               
                            </div>
                          
                            <span>Tanggal input : '.$barang_res['tgl_input'].'</span>
                            <p>
                            <span>Stok : '.$barang_res['jumlah'].'</span>
                            <p class="text-muted para-desc mx-auto">'.$deskripsi.'</p>
                            <a href="shop/'.(urlencode($barang_res['nama_barang'])).'" class="btn btn-primary mt-4"> <img src="27/images/icon/cart.svg" height="50" class="mr-3" alt="">Cek Detail</a>
                        </div>
                    </div><!--end col-->
                    ';
                  }?>

                </div><!--end row-->
                <div class="row justify-content-center">
                    <div class="col-12 text-center mt-4 pt-2">
                        <a href="shop" class="btn btn-primary">Lihat Produk Lainnya <i class="mdi mdi-arrow-right"></i></a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Pricing End -->

        <!-- Contact Start -->
        <section class="section pb-0" id="contact">
            <div class="container">         
                 <!-- Submit Ticket Start -->
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000"><img src="27/images/icon/kontak.svg" height="50" class="mr-3" alt="">Submit A Ticket</h4>
                            <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 col-12 mt-4 pt-2">
                        <img src="27/images/customer/customer.png" data-aos="fade-up" data-aos-duration="1400" class="img-fluid" alt="">
                    </div>
                    <?php
if (isset($_POST['post'])) {
  $nama_tiket = $_POST['nama_tiket'];
    $email_tiket = $_POST['email_tiket'];
    $kategori_tiket  = $_POST['kategori_tiket'];
    $subjek_tiket  = $_POST['subjek_tiket'];
    $url_tiket  = $_POST['url_tiket'];
    $isi_tiket  = $_POST['isi_tiket'];
    $tgl_tiket  = $_POST['tgl_tiket'];
    $ip_tiket  = $_POST['ip_tiket'];
    $spam    = $_POST['dontfill'];
    

    if (md5($_POST['pin']) <> $_SESSION['image_random_value'])
    {
      
  echo'<script>alert(\'Kode Captcha Salah ! !\')
  setTimeout(\'location.href=""\' ,0);</script>';
  exit;
    }
    if (strlen($tgl_tiket) < 2) {
        echo '<div class="alert alert-danger">Your tgl_tiket is too short</div>';
    } else
    if (strlen($ip_tiket) < 2) {
        echo '<div class="alert alert-danger">Your ip_tiket is too short</div>';
    } else
    if (strlen($nama_tiket) < 2) {
        echo '<div class="alert alert-danger">Your nama_tiket is too short</div>';
    } else
    if (strlen($email_tiket) < 2) {
        echo '<div class="alert alert-danger">Your email_tiket is too short</div>';
    } else
    if (strlen($kategori_tiket) < 2) {
        echo '<div class="alert alert-danger">Your kategori_tiket is too short</div>';
    } else
    if (strlen($subjek_tiket) < 2) {
        echo '<div class="alert alert-danger">Your subjek_tiket is too short</div>';
    } else
    if (strlen($url_tiket) < 2) {
      echo '<div class="alert alert-danger">Your url_tiket is too short</div>';
  } else {
        if (strlen($isi_tiket) < 2) {
            echo '<div class="alert alert-warning">Your isi_tiket is too short</div>';
        } else {
			
            if ($spam) { // Honeypot - Stop spam bots
                exit("Spam Detected!");
            } else {
                $runq = mysqli_query($connect, "INSERT INTO `tiket` (nama_tiket, email_tiket, kategori_tiket, subjek_tiket, url_tiket, isi_tiket, tgl_tiket, ip_tiket) VALUES ('$nama_tiket', '$email_tiket', '$kategori_tiket', '$subjek_tiket', '$url_tiket', '$isi_tiket', '$tgl_tiket', '$ip_tiket')");
                echo '<script>
                swal({
                 title: "Good job!",
                 text: "Tiket Kamu Berhasil DI Kirim.",
                 icon: "success",
                 button: "oke!",
               }).then(function() {
                 window.location = "";
               });
                         </script>';
				

			
			}
			
		}
		
    }
}
?>
                    <div class="col-lg-6 col-md-7 col-12 mt-4 pt-2">
                        <form action="./" method="post" class="rounded shadow p-4 ml-lg-4" data-aos="fade-up" data-aos-duration="1400">
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tgl Input :</label>
                                        <input name="tgl_tiket" id="tgl_tiket" type="text" readonly class="form-control" value="<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo date("d M Y", $tanggal);
?> " >
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your ip :</label>
                                        <input name="ip_tiket" id="ip_tiket" type="text" readonly class="form-control" value="<?php
function IPnya() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP Tidak Dikenali';
 
    return $ipaddress;
}
$ipaddress = $_SERVER['REMOTE_ADDR'];
echo IPnya();
?>">
                                    </div> 
                                </div><!--end col--> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Name :</label>
                                        <input name="nama_tiket" id="name" type="text" class="form-control" placeholder="First Name :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Email :</label>
                                        <input name="email_tiket" id="email" type="email" class="form-control" placeholder="Your email :">
                                    </div> 
                                </div><!--end col--> 

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Reasons / Catagories :</label>
                                        <select class="form-control custom-select" id="Sortbylist-Shop" name="kategori_tiket">
                                            <option value="Null">Catagories</option>
                                            <option value="Problem">Problem</option>
                                            <option value="Bugs">Bugs</option>
                                            <option value="Remote">Remote</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subject :</label>
                                        <input name="subjek_tiket" id="subjek_tiket" class="form-control" placeholder="Your subject :">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Url :</label>
                                        <input name="url_tiket" id="url_tiket" type="url" class="form-control" placeholder="Url :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Description :</label>
                                        <i class="mdi mdi-comment-text-outline ml-3 icons"></i>
                                        <textarea name="isi_tiket" id="isi_tiket" rows="4" class="form-control pl-5" placeholder="Describe your problem :"></textarea>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Ketik Captcha DI samping <span class="text-danger">*</span></label>
                                                <img src="captcha.php">
                                                <i class="mdi mdi-pin ml-3 icons"></i>
                                                <input name="pin" id="pin" type="text" class="form-control pl-5" required="Isi  Pin Di atas">
                                            </div> 
                                        </div><!--end col-->
                            </div><!--end row-->
                           
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" name="post" value="Kirim" class="btn btn-primary" >
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div>
            </div><!--end container-->
            <!-- Submit Ticket End -->
            </div><!--end contact-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="map">
                            <iframe src="<?php echo $maps; ?>" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Contact End -->
  <!-- Review Start -->
  <section class="section bg-light" id="testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-60">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Our Testimonial</h4>
                            <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div id="customer-testi" class="owl-carousel owl-theme">
                          
                            
                            <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="1400">
                                <img src="27/images/client/02.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                </div>
                            </div>

                            

                            <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="2400">
                                <img src="27/images/client/05.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                </div>
                            </div>

                            <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="2800">
                                <img src="27/images/client/06.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <!-- Partners start -->
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-2 col-6 text-center" data-aos="fade-up" data-aos-duration="1000">
                        <img src="27/images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->

                    <div class="col-lg-2 col-md-2 col-6 text-center" data-aos="fade-up" data-aos-duration="1200">
                        <img src="27/images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0" data-aos="fade-up" data-aos-duration="1400">
                        <img src="27/images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0" data-aos="fade-up" data-aos-duration="1600">
                        <img src="27/images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0" data-aos="fade-up" data-aos-duration="1800">
                        <img src="27/images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0" data-aos="fade-up" data-aos-duration="2000">
                        <img src="27/images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        <!-- Partners End -->
        </section><!--end section-->
        <!-- Review End -->
        
     <!-- footer -->
     <?php
include "menu/footer.php"
?>
        <!-- footer -->
       
        <?php
include "menu/cssbawah1.php"
?>
    </body>

</html>