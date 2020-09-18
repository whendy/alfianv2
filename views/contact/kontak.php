<?php
session_start();
error_reporting("_ALL");
include "../../config.php"
?>
<!DOCTYPE html>
    <html lang="en">   
<head>
        <meta charset="utf-8" />
        <title><?php echo $nama; ?>- Contact Us</title>
        <meta name="description" content="<?php echo $meta_des; ?>">
		<meta name="keywords" content="<?php echo $meta_key; ?>" />
<meta property="og:title" content="<?php echo $nama; ?> Contact Us">
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
        <section class="bg-half bg-light d-table w-100" style="background: url('27/images/contact-detail.jpg') center center;">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title">Contact Us</h4>
                            <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                <li><a href="./" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                <li>
                                    <span class="text-uppercase text-primary font-weight-bold">Contact us</span> 
                                </li> 
                            </ul>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
 <?php
if (isset($_POST['post'])) {
    $nama_kontak = $_POST['nama_kontak'];
    $email_kontak  = $_POST['email_kontak'];
    $isi_kontak  = $_POST['isi_kontak'];
    $tgl_input_kontak  = $_POST['tgl_input_kontak'];
    $spam    = $_POST['dontfill'];
    
    if (md5($_POST['pin']) <> $_SESSION['image_random_value'])
    {
      
  echo'<script>alert(\'Kode Captcha Salah ! !\')
  setTimeout(\'location.href=""\' ,0);</script>';

  exit;
    }
    
    if (strlen($nama_kontak) < 2) {
        echo '<div class="alert alert-danger">Your nama_kontak is too short</div>';
    } else
    if (strlen($email_kontak) < 2) {
        echo '<div class="alert alert-danger">Your email_kontak is too short</div>';
    } else
    if (strlen($isi_kontak) < 2) {
      echo '<div class="alert alert-danger">Your isi_kontak is too short</div>';
  } else {
        if (strlen($tgl_input_kontak) < 2) {
            echo '<div class="alert alert-warning">Your tgl_input_kontak is too short</div>';
        } else {
			
            if ($spam) { // Honeypot - Stop spam bots
                exit("Spam Detected!");
            } else {
                $runq = mysqli_query($connect, "INSERT INTO `kontak` (`nama_kontak`,email_kontak, isi_kontak, tgl_input_kontak) VALUES ('$nama_kontak', '$email_kontak', '$isi_kontak', '$tgl_input_kontak')");
                echo '<script>
                swal({
                 title: "Good job!",
                 text: "Pesan Kamu Sudah Kami Terima",
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
        <!-- Start Contact -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6  mt-4 pt-2">
                        <div class="pt-5 pb-5 p-4 bg-white rounded shadow">
                            <h4>Get In Touch !</h4>
                            <div class="custom-form mt-4">
                                <div id="message"></div>
                                <form method="post" action="contact" method="post" name="contact-form" id="contact-form">
                                    <div class="row">
                                    <div class="col-md-12">
                                    <label for="dontfill" style="display:none;">Don't fill:</label>
                                                <input type="text" name="dontfill" value="" style="display:none;" />
                                            <div class="form-group position-relative">
                                                <label>Tanggal <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-clock ml-3 icons"></i>
                                                <input name="tgl_input_kontak" id="name" type="text" class="form-control pl-5" readonly value="<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo date("d M Y", $tanggal);
?> " >
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Your Name <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-account ml-3 icons"></i>
                                                <input name="nama_kontak" id="name" type="text" class="form-control pl-5"  required="Isi  Name Mu">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-email ml-3 icons"></i>
                                                <input name="email_kontak" id="email" type="email" class="form-control pl-5"  required="Isi  email Mu">
                                            </div> 
                                        </div><!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Comments</label>
                                                <i class="mdi mdi-comment-text-outline ml-3 icons"></i>
                                                <textarea name="isi_kontak" id="comments" rows="4" class="form-control pl-5" required="Isi  Pesan Mu"></textarea>
                                            </div>
                                        </div>
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
                                        <div class="col-sm-12 text-center">
                                            <input type="submit" name="post" value="Post" class="submitBnt btn btn-primary btn-block" value="Send Message">
                                            <div id="simple-msg"></div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
                            </div><!--end custom-form-->
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-8 col-md-6 pl-md-3 pr-md-3 mt-4 pt-2">
                        <div class="map map-height-two rounded map-gray">
                            <iframe src="<?php echo $maps; ?>" style="border:0" class="rounded" allowfullscreen=""></iframe>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <img src="27/images/icon/bitcoin.svg" class="avatar avatar-small" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Phone</h4>
                                <a href="tel:+152534-468-854" class="text-primary"><?php echo $no; ?></a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <img src="27/images/icon/Email.svg" class="avatar avatar-small" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Email</h4>
                                <a href="mailto:<?php echo $email; ?>" class="text-primary"><?php echo $email; ?></a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <img src="27/images/icon/location.svg" class="avatar avatar-small" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Location</h4>
                                <p class="text-muted"><?php echo $alamat; ?></p>
                                <a href="<?php echo $maps; ?>" class="video-play-icon h6 text-primary">View on Google map</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End contact -->


     
     


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