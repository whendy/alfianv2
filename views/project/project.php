<?php
include "../../config.php"
?>
<!DOCTYPE html>
    <html lang="en">   
<head>
        <meta charset="utf-8" />
        <title><?php echo $nama; ?>- Foto Projek</title>
        <meta name="description" content="<?php echo $meta_des; ?>">
		<meta name="keywords" content="<?php echo $meta_key; ?>" />
<meta property="og:title" content="<?php echo $nama; ?> Foto Projek">
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
                            <h1 class="display-1 font-weight-bold mb-3">Foto Projek <span class="text-primary font-weight-bold"><?php echo $nama; ?></h1>
                            <p class="para-desc mx-auto h6">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container--> 
        </section><!--end section-->
        <!-- Hero End -->    

       
       
         <!-- Work Start -->
         <section class="section">
         <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title mb-4"><img src="27/images/icon/image.svg" height="50" class="mr-3" alt="">Foto Projek <span class="text-primary font-weight-bold"> <span class="text-primary font-weight-bold"><?php echo $nama; ?></span></h4>
                        
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

$foto = mysqli_query($mysqli, "select foto.id,foto.foto_nama,foto.isi,foto.userfile,kategorifoto.namakategori from foto,kategorifoto where foto.idkategori=kategorifoto.idkategori");
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
                                <a href="projek/'.(urlencode($foto_res['foto_nama'])).'" class="title text-white d-block font-weight-bold">'.$foto_res['foto_nama'].'</a>
                                <small class="text-light">'.$foto_res['namakategori'].'</small>
                            </div>
                            <div class="client personal-port">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> '.$nama.'</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->
                    ';
                  }?>
                    
                </div><!--end row-->
            </div><!--end container-->
            <p>

            
        </section>
        <!--end section-->
        <!-- Work End -->
       
      

     
     


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