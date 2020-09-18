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
                    <li class="breadcrumb-item active">Blog List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 left-box">
                
                
                <div class="card single_post">
                <?php
$batas   = 6;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
	$posisi  = 0;
	$halaman = 1;
}
else{ 
  $posisi  = ($halaman-1) * $batas; 
}

// Langkah 2. Sesuaikan query dengan posisi dan batas
$query  = "SELECT * FROM post ORDER BY idpost DESC LIMIT $posisi,$batas ";
$tampil = mysqli_query($mysqli, $query);
$no = $posisi+1;
		while($res = mysqli_fetch_array($tampil)) {		
            $isi = strip_tags($res['isi']);

            $des = htmlentities(strip_tags($res['isi'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $isi = substr($des,0,150); // ambil sebanyak 220 karakter
            $isi= substr($des,0,strrpos($isi," ")); // potong per spasi kalimat

			
          echo  '
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="dblog.php?idpost='.$res['idpost'].'">'.$res['judul'].'</a></h3>
                        <ul class="meta">
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: '.$res['penulis'].'</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">archive</i> '.$res['tanggal_post'].'</a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
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
                        <p>'.$isi.'...</p>
                        <a href="dblog.php?idpost='.$res['idpost'].'" title="read more" class="btn btn-round btn-info">Read More</a>                        
                    </div>
                    ';
            }
            ?>
                </div>                               
                <ul class="pagination pagination-primary">
                <?php
 $query2     = mysqli_query($mysqli, "select * from post");
 $jmldata    = mysqli_num_rows($query2);
 $jmlhalaman = ceil($jmldata/$batas);
 
 if(!empty($halaman) && $halaman != 1)
{
$previous=$halaman-1;
echo '<li class="page-item"><a class="page-link" href="blog.php?halaman='.$previous.'">Previous</a></li>';
}
 for($i=1;$i<=$jmlhalaman;$i++)
 if ($i != $halaman){
     echo '<li class="page-item"><a class="page-link" href="blog.php?halaman='.$i.'">'.$i.'</a></li>';
 }
 else{ 
    echo '<li class="page-item active"><a class="page-link" >'.$i.'</a></li>';

 }
 if($halaman < $jmlhalaman)
{
$next=$halaman+1;
echo '<li class="page-item"><a class="page-link" href="blog.php?halaman='.$next.'">Next</a></li>';
}

                  ?>     
                    
                    
                    
                    
                </ul>                 
            </div>
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
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="border single_post">                                    
                                    <div class="img-post m-b-5">
                                        <img src="../assets/images/blog/blog-page-2.jpg" alt="Awesome Image">                                        
                                    </div>
                                    <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                                    <small>Dec 20, 2017</small>
                                </div>
                                <div class="border single_post m-t-20">
                                    <div class="img-post m-b-5">
                                        <img src="../assets/images/blog/blog-page-3.jpg" alt="Awesome Image">                                            
                                    </div>
                                    <p class="m-b-0">new rules, more cars, more races</p>
                                    <small>Dec 20, 2017</small>
                                </div>
                            </div>
                        </div>
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
                <div class="card">
                    <div class="header">
                        <h2><strong>Instagram</strong> Post</h2>                        
                    </div>
                    <div class="body widget">
                        <ul class="list-unstyled instagram-plugin m-b-0">
                            <li><a href="javascript:void(0);"><img src="../assets/images/blog/05-img.jpg" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="../assets/images/blog/06-img.jpg" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="../assets/images/blog/07-img.jpg" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="../assets/images/blog/08-img.jpg" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="../assets/images/blog/09-img.jpg" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="../assets/images/blog/10-img.jpg" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="../assets/images/blog/11-img.jpg" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="../assets/images/blog/12-img.jpg" alt="image description"></a></li>
                            <li><a href="javascript:void(0);"><img src="../assets/images/blog/13-img.jpg" alt="image description"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Email</strong> Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
                    </div>
                    <div class="body widget newsletter">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-mail-send"></i>
                            </span>
                        </div>
                    </div>
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

