<?php
session_start();

if( !isset($_SESSION['saya_admin']) )
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
<!-- end session -->
<!doctype html>
<html class="no-js " lang="en">

<!-- Main header -->
<?php
include "header/header2.php"
?>
<!-- end header -->


<!-- Main sidebar -->
<?php
include "header/sidebar.php"
?>
<!-- end sidebar -->

<?php
include "header/sessionedit.php"
?>
<?php
// including the database koneksi file
include_once("./../config.php");

if(isset($_POST['update']))
{	
	
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hak_akses = $_POST['hak_akses'];
    $no = $_POST['no'];
    $keterangan = $_POST['keterangan'];
    $alamat = $_POST['alamat'];
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    
     $userfile = "foto/".$foto;
     $direktori   = "./../foto/".$userfile;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "./../foto/".$_FILES['foto']['name']);

	// checking empty fields
	if(empty($nama) || empty($email) || empty($username) ||  empty($password) || empty($hak_akses) || empty($no) || empty($keterangan) || empty($alamat) || empty($userfile)) {
				
		if(empty($nama)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if(empty($email)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($password)) {
			echo "<script>window.alert('Ulangi Lagi Password Lama atau Baru harus di Isi')
        window.location=''</script>";
        }

        if(empty($hak_akses)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($no)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($keterangan)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($alamat)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if(empty($userfile)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
        }
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET nama='$nama', email='$email', username='$username',  password=SHA1('$password'), hak_akses='$hak_akses', no='$no', keterangan='$keterangan', alamat='$alamat', userfile='$userfile' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Data Berhasil DI Ubah')
        window.location=''</script>";	
	}
}
?>
<?php
//getting id from url$id = $_GET['id'];
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

    $nama = $res['nama'];
    $email = $res['email'];
    $username = $res['username'];
    $password = $res['password'];
    $hak_akses = $res['hak_akses'];
    $userfile = $res['userfile'];
    $no = $res['no'];
    $keterangan = $res['keterangan'];
    $alamat = $res['alamat'];
    $userfile = $res['userfile'];
    
    
	
}
?>
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Profile: <?php echo $nama ?>
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>                
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="../../<?php echo $userfile ?>" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong><?php echo addslashes($res['nama']);?></strong> </h4>
                                <span class="job_post"><?php echo $keterangan ?></span>
                                <p><?php echo $alamat ?></p>
                                <div>
                                    <button class="btn btn-primary btn-round">Follow</button>
                                    <button class="btn btn-primary btn-round btn-simple">Message</button>
                                </div>
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="Google-plus" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="Behance" href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram "></i></a>
                                </p>
                            </div>                
                        </div>
                    </div>                    
                </div>
            </div>
            
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">About</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            <small class="text-muted">Email address: </small>
                            <p><?php echo $email ?></p>
                            <hr>
                            <small class="text-muted">Phone: </small>
                            <p><?php echo $no ?></p>
                            <hr>
                           
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0">October 22th, 1990</p>
                        </div>
                                               
                    </div>
                </div>
               
                
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#usersettings">Setting</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    

                    

                    <div role="tabpanel" class="tab-pane active" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Security</strong> Settings</h2>
                            </div>
                            <form action="../user/<?php echo $id;?>" method="POST" enctype='multipart/form-data' class="form-horizontal" >
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="body">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="nama" value="<?php echo $nama ?>">
                                </div>
                                
                               
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="email" name="email" value="<?php echo $email ?>">
                                        </div>
                                    
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name" name="username" readonly value="<?php echo $username ?>">
                                        </div>
                                        <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Current Password"  Readonly value="<?php echo $password ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password" name="password" >
                                </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City" name="hak_akses" readonly value="<?php echo $hak_akses ?>">
                                    </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="No Telp" name="no" value="<?php echo $no ?>">
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Alamat" name="alamat"><?php echo $alamat ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Skil" name="keterangan"><?php echo $keterangan ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="../../<?php echo $userfile ?>" alt=""> </div>
                            </div>
                            <div class="form-group">
                                                    <input type="file" id="foto" name="foto" class="form-control-file" onchange="PreviewImage();" readonly value="<?php echo $userfile ?>">
                                                </div>  
                                <button type="submit" class="btn btn-info btn-round" name="update" value="update">Save Changes</button>                               
                            </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "footer/footer2.php"
?>
</body>

</html>