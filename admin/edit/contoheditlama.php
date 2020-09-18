<!-- Main session -->
<?php
include "header/session.php"
?>
<!-- end session -->
<!doctype html>
<html class="no-js " lang="en">

<!-- Main header -->
<?php
include "header/header.php"
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
    
    $isi = $_POST['isi'];
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    
     $userfile = "foto/".$foto;
     $direktori   = "./../foto/".$userfile;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "./../foto/".$_FILES['foto']['name']);

	// checking empty fields
	if(empty($nama) || empty($isi) || empty($userfile)) {
				
		if(empty($nama)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($isi)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if(empty($userfile)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
        }
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE foto SET nama='$nama', isi='$isi', userfile='$userfile' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Data Berhasil DI Ubah')
        window.location='foto.php'</script>";	
	}
}
?>
<?php
//getting id from url$id = $_GET['id'];
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM foto WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

    $nama = $res['nama'];
    $isi = $res['isi'];
    $userfile = $res['userfile'];
    
    
	
}
?>
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Profile
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
                                <h2><strong>Foto</strong> Settings</h2>
                            </div>
                            <form action="efoto.php?id=<?php echo $id;?>" method="POST" enctype='multipart/form-data' class="form-horizontal" >
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="body">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="nama" value="<?php echo $nama ?>">
                                </div>
                                
                               
                                       
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="isi" name="isi"><?php echo $isi ?></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="./../<?php echo $userfile ?>" alt=""> </div>
                            </div>
                            
                            <div class="form-group">
                            <div class="form-line">

                                                    <input type="file" id="foto" name="foto" class="form-control-file" onchange="PreviewImage();" readonly value="<?php echo $userfile ?>">
                                                </div> 
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
include "footer/footer.php"
?>
</body>

</html>