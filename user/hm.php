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
<!-- Dagangan -->
<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Product
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="./"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
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

// Langkah 2. Sesuaikan query dengan posisi dan batas
$query  = "SELECT * FROM barang ORDER BY id DESC LIMIT $posisi,$batas ";
$tampil = mysqli_query($mysqli, $query);
$no = $posisi+1;
		while($res = mysqli_fetch_array($tampil)) {		
         
			
          echo  '
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card product_item">
                    <div class="body">
                        <div class="cp_img">
                            <img src="./../'.$res['gambar'].'" alt="Product" class="img-fluid" />
                            <div class="hover">
                                <a href="produk/'.($res['id']).'" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-eye col-amber"></i></a>
                        
                            </div>
                        </div>
                        <div class="product_details">
                            <h5><a href="ec-product-detail.html">'.$res['nama'].'</a></h5>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">Rp.'.(number_format($res['harga'])).'</li>
                                <li class="new_price">Stok:'.$res['jumlah'].'</li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
            ';
        }
        ?>

            
           

        </div>
        <ul class="pagination pagination-primary">
                <?php
 $query2     = mysqli_query($mysqli, "select * from barang");
 $jmldata    = mysqli_num_rows($query2);
 $jmlhalaman = ceil($jmldata/$batas);
 
 if(!empty($halaman) && $halaman != 1)
{
$previous=$halaman-1;
echo '<li class="page-item"><a class="page-link" href="'.$previous.'">Previous</a></li>';
}
 for($i=1;$i<=$jmlhalaman;$i++)
 if ($i != $halaman){
     echo '<li class="page-item"><a class="page-link" href="'.$i.'">'.$i.'</a></li>';
 }
 else{ 
    echo '<li class="page-item active"><a class="page-link" >'.$i.'</a></li>';

 }
 if($halaman < $jmlhalaman)
{
$next=$halaman+1;
echo '<li class="page-item"><a class="page-link" href="'.$next.'">Next</a></li>';
}

                  ?>     
                    
                    
                    
                    
                </ul>
    </div>   
</section>


<!-- Jquery Core Js --> 
<?php
include "footer/footer.php"
?>
</body>

</html>

