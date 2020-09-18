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
include "header/header2.php"
?>
<?php
include "header/sidebar.php"
?>
<!-- Detail Dagangan -->
<?php
//including the database koneksi file
error_reporting(0);
include_once("./../config.php");
function antiInjections($string) {
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}
$id=antiInjections($_GET['id']);
    $result=mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");
    
    while($res=mysqli_fetch_array($result))
    {
        $deskripsi2 = strip_tags($res['deskripsi2']);

            $des = htmlentities(strip_tags($res['deskripsi2'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $deskripsi2 = substr($des,0,500); // ambil sebanyak 220 karakter
            $deskripsi2= substr($des,0,strrpos($deskripsi2," ")); // potong per spasi kalimat
        $nama = $res['nama'];
        $jenis = $res['jenis'];
        $suplier = $res['suplier'];
        $modal = $res['modal'];
        $harga = $res['harga'];
        $jumlah = $res['jumlah'];
        $tgl_input = $res['tgl_input'];
        $sisa = $res['sisa'];
        $gambar = $res['gambar'];
        $deskripsi = $res['deskripsi'];
        $warna = $res['warna'];
        $kode_barang = $res['kode_barang'];

        
    }
?>
 
<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Product Detail
                <small><?php echo $nama; ?></small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="../"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active"><?php echo $nama; ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="preview col-lg-4 col-md-12">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="product_1"><img src=".././../<?php echo $gambar; ?>" class="img-fluid" /></div>
                            
                                </div>
                                               
                            </div>
                            <div class="details col-lg-8 col-md-12">
                                <h3 class="product-title m-b-0"><?php echo $nama; ?></h3>
                                <h4 class="price m-t-0">Harga: <span class="col-amber"><?php echo (number_format($harga)); ?></span></h4>
 
                                <hr>
                                <p class="product-description"><?php echo $deskripsi2; ?></p>
                                
                                <h5 class="colors">colors:                               
                                    <span class="color bg-<?php echo $warna; ?>"></span>
                                </h5>
                                <h5 class="colors">Kode Barang: <?php echo $kode_barang; ?></h5>
                                </h5>
                                <hr>
                                <div class="action">
                                <a style="margin-bottom:10px" href="https://wa.me/6282110148215?text=Hai,%20min%20saya%20mau%20order%20:%20<?php echo $nama; ?>%0AKode:%20<?php echo $kode_barang; ?>%0Awarna%20:%20<?php echo $warna; ?>%0AHarga%20:%20Rp.<?php echo (number_format($harga)); ?>%0A%0ATerimaksi" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Beli Via Whatsapp</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description">Description</a></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="body">                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="description">
                                <p><?php echo $deskripsi; ?></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>

<!-- Jquery Core Js --> 
<?php
include "footer/footer2.php"
?>
</body>

</html>

