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
include "header/header.php"
?>
<!-- end header -->


<!-- Main sidebar -->
<?php
include "header/sidebar.php"
?>
<!-- end sidebar -->


<!-- Main pfoto -->
<?php
include "prosestambah/puser.php"
?>
<!-- end pfoto -->

<!-- Main Content -->
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>User
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="../"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">
                        <button type="button" class="btn btn-round btn-info waves-effect" data-toggle="modal" data-target="#addpost"><i class="zmdi zmdi-plus-circle"></i> Add User</button>

                            <div class="col-lg-5 col-md-5 col-6">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <?php echo display_error(); ?>
        <?php echo success(); ?>
        <div class="row clearfix">
            <div class="col-lg-12">
            <?php

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users");
$no=1;
?>
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead>
                                <tr>
                                <th> No </th>
                                <th>Nama</th>
                                                            <th>Username</th>
                                                            <th>Email</th>
                                                            <th>Password</th>
                                                            <th>Level</th>
                                                            <th> FOTO </th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php
		while($res = mysqli_fetch_array($result)) {		
            ?>	
                                                    <tr>
                                                    <td><?php echo $no++;?></td>
                                                            <td><?php echo addslashes($res['nama']);?></td>
                                                            <td><?php echo addslashes($res['username']);?></td>
                                                            <td><?php echo addslashes($res['email']);?></td>
                                                            <td>
                                                    <input type="password" Readonly value="<?php echo addslashes($res['password']);?>" class="form-control form-control-line">
                                            </td>
                                                            <td><?php echo addslashes($res['hak_akses']);?></td>  
                                                        <td>
                                                            <img src="./../<?php echo addslashes($res['userfile']);?>" class="rounded-circle avatar" alt=""></td>                                                                                                    
                                                            <td>
                                                            <a href="user/<?php echo addslashes($res['id']);?>" class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></a>
                                                                                             <a href="hapus/huser.php?id=<?php echo addslashes($res['id']);?> " class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></a>
                                                                                                 </td>
                                                                                              
                                                            <tr>
                                                                                             
                                                <?php
                                                        }
                                                       
                                                        ?>
                            </tbody>
                        </table>
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