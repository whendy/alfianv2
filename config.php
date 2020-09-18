<?php
/**
 * Nama File : Config.php
 * File Ini berisi beberapa data penting seperti
 * Data koneksi ke database
 * Secret Kode
 * dan data lain yang nantinya akan digunakan secara terus-menerus
 */
 
 # rubahlah sesuai alamat website kamu
 $url    = 'http://localhost:84/alfian/';

 # host untuk database, biasanya 'localhost'
 $dbhost = 'localhost';
 
 # username untuk mengakses database, jika dilokal biasanya 'root'
 $dbuser = 'root';

 # password untuk mengakses databae, jika dilokal biasanya kosong
 $dbpass = '';

 # nama database yang akan digunakan
 $dbname = 'alfian';
 

 
 # koneksi Database
 $koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
 $mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
 $conn   = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
 $connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


 if (mysqli_connect_errno()) {
    printf("Database connection failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_set_charset($connect, "utf8");
 # Check koneksi, berhasil atau tidak
 if( $koneksi->connect_error )
 {
 	die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
 }

 $url = rtrim($url,'/');
 ?>
 <?php
//including the database koneksi file
	$result=mysqli_query($mysqli, "SELECT * FROM setting");
    while($res=mysqli_fetch_array($result))
    {
        $nama = $res['nama'];
        $penjelasan = $res['penjelasan'];
        $sosial_ig = $res['sosial_ig'];
        $sosial_fb = $res['sosial_fb'];
        $sosial_twitter = $res['sosial_twitter'];
        $gambar = $res['gambar'];
        $gambar2 = $res['gambar2'];
        $gambar3 = $res['gambar3'];
        $meta_key = $res['meta_key'];
        $meta_des = $res['meta_des'];
        $email = $res['email'];
        $no = $res['no'];
        $alamat = $res['alamat'];
        $maps = $res['maps'];

        
    }
?>
