<?php
session_start();
error_reporting("_ALL");
include "../../config.php"
?>
<?php
	include_once("../../config.php");

    $idpost=addslashes($_GET['idpost']);
    //selecting data associated with this particular id
$runq = mysqli_query($connect, "SELECT * FROM `post` WHERE judul='$idpost'");
if (mysqli_num_rows($runq) == 0) {
    echo '<meta http-equiv="refresh" content="0; url=../blog">';
}
mysqli_query($connect, "UPDATE `post` SET views = views + 1 WHERE active='Yes' and judul='$idpost'");

    $query=mysqli_query($mysqli, "select post.idpost,post.idkategori,post.views,post.userfile,kategori.namakategori,post.judul,post.isi,post.tanggal_post,post.penulis,post.meta_key,post.meta_des from kategori,post where (kategori.idkategori=post.idkategori) and (post.judul='$idpost')");
   
    if (mysqli_num_rows($query) == 0) {
        echo '<meta http-equiv="refresh" content="0; url=../blog">';
    }
    $data=mysqli_fetch_array($query);
    $idpost=$data['idpost'];
	$idkategori=$data['idkategori'];
	$namakategori=$data['namakategori'];
	$judul=$data['judul'];
	$isi=$data['isi'];
	$tanggal_post=$data['tanggal_post'];
	$penulis=$data['penulis'];
    $meta_key=$data['meta_key'];
    $meta_des=$data['meta_des'];
    $userfile=$data['userfile'];
    $views=$data['views'];   
?>  
<!DOCTYPE html>
    <html lang="en">   
<head>
        <meta charset="utf-8" />
        <title><?php echo $nama; ?> -  <?php echo $judul; ?></title>
        <meta name="description" content="<?php echo $meta_des; ?>">
		<meta name="keywords" content="<?php echo $meta_key; ?>" />
<meta property="og:title" content="<?php echo $nama; ?> -  <?php echo $meta_key; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo $url; ?>">
		<meta property="og:description" content="<?php echo $meta_des; ?>">
		<meta property="og:image" content="<?php echo $url; ?>/<?php echo $userfile; ?>">
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
                            <h4 class="title"> <?php echo $judul; ?> </h4>
                            <ul class="list-unstyled mt-4">
                                <li class="list-inline-item h6 date text-muted"> <span class="text-dark"><i class="mdi mdi-calendar"></i> Date :</span> <?php echo $tanggal_post; ?></li>
                                <p>
                                <li class="list-inline-item h6 date text-muted"> <span class="text-dark"><i class="mdi mdi-eye-outline mr-1"></i> Views :</span> <?php echo $views; ?></li>
                            </ul>
                            <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                <li><a href="../" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                <li><a href="../blog" class="text-uppercase font-weight-bold text-dark">Blog</a></li>

                                
                                <li>
                                    <span class="text-uppercase text-primary font-weight-bold"><?php echo $judul; ?></span> 
                                </li> 
                            </ul>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

       
        
        <!-- Start Work Detail -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <img src="../<?php echo $userfile; ?>" class="img-fluid rounded" alt="">
                        <h6><i class="mdi mdi-account text-primary mr-1"></i><a href="javscript:void(0)" class="text-primary"><?php echo $penulis; ?></a> | <i class="mdi mdi-tag text-primary mr-1"></i><a href="javscript:void(0)" class="text-primary"><?php echo $namakategori; ?></a></h6>
                    </div>

                    <div class="col-md-10 mt-4 pt-2">
                        <div class="bg-light rounded p-4">
                            <p><?php echo $isi; ?></p>
                        </div>

                       

                        <div class="row align-items-center">
                            <div class="col-lg-6 mt-4 pt-2">
                                <div class="work-details rounded bg-light p-4">
                                    <h5 class="title border-bottom pb-3 mb-3">Blog/Artikel Info :</h5>
                                    <dl class="row mb-0">
                                        

                                        <dt class="col-md-4 col-5">Category :</dt>
                                        <dd class="col-md-8 col-7 text-muted"><?php echo $namakategori; ?></dd>

                                        <dt class="col-md-4 col-5">Date :</dt>
                                        <dd class="col-md-8 col-7 text-muted"><?php echo $tanggal_post; ?></dd>

                                        <dt class="col-md-4 col-5">Website :</dt>
                                        <dd class="col-md-8 col-7 text-muted"><?php echo $url; ?></dd>

                                        <dt class="col-md-4 col-5">Location :</dt>
                                        <dd class="col-md-8 col-7 text-muted"><?php echo $alamat; ?></dd>
                                    </dl>                       
                                </div>
                            </div>
        
                            <div class="col-lg-6 mt-4 pt-2">
                                <img src="<?php echo $gambar3; ?>" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                
                        <!-- Comment Areas start -->
                        <div class="shadow rounded mt-4 pt-2">
                            <div class="p-4">
                                <h4 class="page-title pb-3">Comments </h4>
                                <ul class="media-list list-unstyled mb-0">

                                <?php
$q     = mysqli_query($connect, "SELECT * FROM komentar WHERE post_id='$data[judul]' AND approved='Yes' ORDER BY id DESC");
$count = mysqli_num_rows($q);
if ($count <= 0) {
    echo '<div class="alert alert-info">There are no comments yet</div>';
} else {
    while ($comment = mysqli_fetch_array($q)) {
        
        echo '
                                    <li class="comment-desk mt-4">
                                        <div class="commentor">
                                            <a class="float-left pr-3" href="#">
                                                <img src="../' . $comment['avatar'] . '" class="img-fluid avatar avatar-md-sm rounded-pill shadow" alt="img">
                                            </a>
                                            <div class="overflow-hidden d-block">
                                                <h4 class="media-heading mb-0"><a href="javascript:void(0)" class="text-dark">' . (addslashes($comment['author'])) . '</a></h4>
                                                <small class="text-muted">' . $comment['date'] . ' | ' . $comment['time'] . '</small>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted font-italic p-3 bg-light rounded">" ' . (addslashes($comment['comment'])) . ' "</p>
                                        </div>
                                    </li>
                                    ';
                        }
                      }
                      ?>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 pt-2 p-4 shadow rounded">
                            <h4 class="page-title pb-3">Leave A Comment :</h4>
                            <form action="../blog/<?php echo (urlencode($judul)); ?>" method="post" class="row">
                                <div class="row">
                                    
                                    <label for="dontfill" style="display:none;">Don't fill:</label>
                                                <input type="text" name="dontfill" value="" style="display:none;" />
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-account ml-3 icons"></i>
                                            <input id="name" name="author" type="text" placeholder="Name" class="form-control pl-5" required="">
                                        </div>
                                    </div><!--end col-->
                                    <input id="name" name="post_id" style="display:none;" type="text" placeholder="Name" value="<?php echo $judul; ?>" class="form-control pl-5" required="">

                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Ketik Captcha DI Samping <span class="text-danger">*</span></label>
                                            <img src="../captcha.php">
                                            <i class="mdi mdi-pin ml-3 icons"></i>
                                            <input  type="text" placeholder="Pin" name="pin" class="form-control pl-5" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Comment</label>
                                            <i class="mdi mdi-comment-outline ml-3 icons"></i>
                                            <textarea id="message" name="comment" placeholder="Your Comment" rows="5" name="message" class="form-control pl-5" required=""></textarea>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                        <div class="checkbox">
                            <label>
                              <input type="checkbox" data-toggle="modal" data-target="#LoginForm" class="btn btn-primary"> I agree to the terms and conditions
                            </label>
                          </div>
                           
                                        </div>
                                    </div><!--end col-->
                                    
                                        <button type="submit" name="post" value="Post" class="btn btn-primary w-100">Send Message</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                        <!-- Comment Areas End -->
                    </div>
                    </div>
            <?php
if (isset($_POST['post'])) {
  $post_id = $_POST['post_id'];
    $comment = $_POST['comment'];
    $author  = $_POST['author'];
    $spam    = $_POST['dontfill'];
    date_default_timezone_set('Asia/Jakarta');
    $date = date('d F Y');
    $time = date('H:i');
    
    if (md5($_POST['pin']) <> $_SESSION['image_random_value'])
    {
      
  echo'<script>alert(\'Kode Captcha Salah ! !\')
  setTimeout(\'location.href=""\' ,0);</script>';

  exit;
    }

    if (strlen($post_id) < 2) {
        echo '<div class="alert alert-danger">Your comment is too short</div>';
    } else
    if (strlen($comment) < 2) {
      echo '<div class="alert alert-danger">Your comment is too short</div>';
  } else {
        if (strlen($author) < 2) {
            echo '<div class="alert alert-warning">Your name is too short</div>';
        } else {
			
            if ($spam) { // Honeypot - Stop spam bots
                exit("Spam Detected!");
            } else {
                $runq = mysqli_query($connect, "INSERT INTO `komentar` (post_id, `comment`,author, date, time) VALUES ('$post_id', '$comment', '$author', '$date', '$time')");
                echo '<script>
                swal({
                 title: "Good job!",
                 text: "Your comment has benn successfully posted",
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
                </div>
            </div>
        </section>
        <!-- End Work Detail -->
        
<!-- Modal Content Start -->
<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content rounded shadow border-0">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Terms And Conditions </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="bg-white p-3 rounded box-shadow">
                                                        <p class="text-muted mb-0">Sekiranya Apabila Anda Komentar,Berkomentarlah Yang Bijak Dan Baik Terimakasih :)</p>                                                        
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Content End -->
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