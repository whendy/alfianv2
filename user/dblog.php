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
                <h2>Blog Detail
                    <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                    <li class="breadcrumb-item active">Blog Detail</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12">
            <?php
//getting id from url
$idpost = (int) $_GET['idpost'];
if (empty($idpost)) {
    echo '<meta http-equiv="refresh" content="0; url=blog.php">';
}
//selecting data associated with this particular id
$runq = mysqli_query($connect, "SELECT * FROM `post` WHERE idpost='$idpost'");
if (mysqli_num_rows($runq) == 0) {
    echo '<meta http-equiv="refresh" content="0; url=blog.php">';
}
mysqli_query($connect, "UPDATE `post` SET views = views + 1 WHERE active='Yes' and idpost='$idpost'");
$res         = mysqli_fetch_assoc($runq);
$post_id     = $res['idpost'];
$runq3       = mysqli_query($connect, "SELECT * FROM `komentar` WHERE post_id='$post_id' AND approved='Yes'");
$jml        = mysqli_num_rows($runq3);

echo'	
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="blog-details.html">' . $res['judul'] . '</a></h3>
                        <ul class="meta">
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: '.$res['penulis'].'</a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-date col-amber"></i>'.$res['tanggal_post'].'</a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: ' . $jml . '</a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-eye col-amber"></i>Views: ' . $res['views'] . '</a></li>

                        </ul>
                    </div>                    
                    <div class="body">
                        <div class="img-post m-b-15">
                        <img src="./../'.$res['userfile'].'" alt="Awesome Image">
                        <div class="social_share">                            
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                            </div>
                        </div>
                        <p>'.$res['isi'].'</p>
                    </div>
                </div>
                <h3><strong>Comments</strong> ' . $jml . '</h3>';?>
                
                <div class="card">
                    <div class="header">
                        
                    </div>
                   
                    <div class="body">
                    
                        <ul class="comment-reply list-unstyled">
                        <?php
$q     = mysqli_query($connect, "SELECT * FROM komentar WHERE post_id='$res[idpost]' AND approved='Yes' ORDER BY id DESC");
$count = mysqli_num_rows($q);
if ($count <= 0) {
    echo '<div class="alert alert-info">There are no comments yet</div>';
} else {
    while ($comment = mysqli_fetch_array($q)) {
        
        echo '
                            <li class="row">
                                <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="./../' . $comment['avatar'] . '" alt="Awesome Image"></div>
                                <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                    <h5 class="m-b-0">' . $comment['author'] . '</h5>
                                    <p>' . $comment['comment'] . '</p>
                                    <ul class="list-inline">
                                        <li><a href="javascript:void(0);">' . $comment['date'] . ' | ' . $comment['time'] . ' </a></li>
                                    </ul>
                                </div>
                            </li>
                            ';
                        }
                      }
                      ?>
                        </ul>                                        
                    </div>
                  
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Leave</strong> a reply <small>Your email address will not be published. Required fields are marked*</small></h2>
                    </div>
                    <div class="body">
                        <div class="comment-form">
                            <form action="dblog.php?idpost=<?php echo $idpost; ?>" method="post" class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="author" placeholder="Your Name" readonly value="<?php echo $nama; ?>">
                                    </div>
                                </div>
                                <label for="dontfill" style="display:none;">Don't fill:</label>
                                                <input type="text" name="dontfill" value="" style="display:none;" />
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="comment" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group">
               
               <input class="form-control" type="text" name="pin" placeholder="Ketik kode di Samping" required>
               </div>   
               <img src="./../captcha.php">
                                    <button type="submit" name="post" value="Post" class="btn btn btn-primary btn-round">SUBMIT</button>
                                                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
if (isset($_POST['post'])) {
    
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

    if (strlen($comment) < 2) {
        echo '<div class="alert alert-danger">Your comment is too short</div>';
    } else {
        if (strlen($author) < 2) {
            echo '<div class="alert alert-warning">Your name is too short</div>';
        } else {
			
            if ($spam) { // Honeypot - Stop spam bots
                exit("Spam Detected!");
            } else {
                $runq = mysqli_query($connect, "INSERT INTO `komentar` (post_id, `comment`,author, date, time) VALUES ('$res[idpost]', '$comment', '$author', '$date', '$time')");
				echo'<script>alert(\'Your comment has benn successfully posted\')
	setTimeout(\'location.href=""\' ,0);</script>';
				

			
			}
			
		}
		
    }
}
?>
            <div class="col-lg-4 col-md-12 right-box">
                <div class="card">
                    <div class="body search">
                        <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Popular</strong> Posts</h2>                        
                    </div>
                    <div class="body widget popular-post">
                        <ul class="list-unstyled m-b-0">
                            <li class="row">
                                <div class="icon-box col-4">
                                    <img class="img-fluid img-thumbnail" src="../assets/images/blog/1.jpg" alt="Awesome Image">
                                </div>
                                <div class="text-box col-8 p-l-0">
                                    <h5 class="m-b-0"><a href="javascript:void(0);">Web Design</a></h5>
                                    <small class="author-name">By: <a href="javascript:void(0);">Michael Allenson</a></small>
                                    <small class="date">Dec, 05 2017</small>
                                </div>
                            </li>
                            <li class="row">
                                <div class="icon-box col-4">
                                    <img class="img-fluid img-thumbnail" src="../assets/images/blog/2.jpg" alt="Awesome Image">
                                </div>
                                <div class="text-box col-8 p-l-0">
                                    <h5 class="m-b-0"><a href="javascript:void(0);">UI UX Design</a></h5>
                                    <small class="author-name">By: <a href="javascript:void(0);">Michael Allenson</a></small>
                                    <small class="date">Dec, 15 2017</small>
                                </div>
                            </li>
                            <li class="row">
                                <div class="icon-box col-4">
                                    <img class="img-fluid img-thumbnail" src="../assets/images/blog/3.jpg" alt="Awesome Image">
                                </div>
                                <div class="text-box col-8 p-l-0">
                                    <h5 class="m-b-0"><a href="javascript:void(0);">Photography</a></h5>
                                    <small class="author-name">By: <a href="javascript:void(0);">Michael Allenson</a></small>
                                    <small class="date">Dec, 15 2017</small>
                                </div>
                            </li>
                            <li class="row">
                                <div class="icon-box col-4">
                                    <img class="img-fluid img-thumbnail" src="../assets/images/blog/4.jpg" alt="Awesome Image">
                                </div>
                                <div class="text-box col-8 p-l-0">
                                    <h5 class="m-b-0"><a href="javascript:void(0);">New Technology</a></h5>
                                    <small class="author-name">By: <a href="javascript:void(0);">Michael Allenson</a></small>
                                    <small class="date">Dec, 20 2017</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>                
                <div class="card">
                    <div class="header">
                        <h2><strong>Tag</strong> Clouds</h2>                        
                    </div>
                    <div class="body widget tag-clouds">
                        <ul class="list-unstyled m-b-0">
                            <li><a href="javascript:void(0);" class="tag badge badge-default">Design</a></li>
                            <li><a href="javascript:void(0);" class="tag badge badge-success">Project</a></li>
                            <li><a href="javascript:void(0);" class="tag badge badge-info">Creative UX</a></li>
                            <li><a href="javascript:void(0);" class="tag badge badge-success">Wordpress</a></li>
                            <li><a href="javascript:void(0);" class="tag badge badge-warning">HTML5</a></li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</section>
<?php
 include "./../counter.php"; 
?>
<!-- Jquery Core Js --> 
<?php
include "footer/footer.php"
?>
</body>

</html>

