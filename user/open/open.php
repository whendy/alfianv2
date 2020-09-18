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
include_once("./../../config.php");
$id=$_GET['id'];
	$result=mysqli_query($mysqli, "SELECT * FROM tickets WHERE id=$id");
    while($res=mysqli_fetch_array($result))
    {
        $id = $res['id'];
        $user = $res['user'];
        $message = $res['message'];
        $datetime = $res['datetime'];
        $last_update = $res['last_update'];
        $status = $res['status'];
        
        

        
    }
?>

<?php 

// connect to database
include_once("./../../config.php");

$errors   = array();
$success   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['Submit'])) {
    Submit();
}



// REGISTER USER
function Submit(){
    global $conn, $errors;
    global $conn, $success;
    
    // receive all input values from the form
    $ticket_id    =  e($_POST['ticket_id']);
    $sender    =  e($_POST['sender']);
    $user    =  e($_POST['user']);
    $message    =  e($_POST['message']);
    $datetime    =  e($_POST['datetime']);
       
    
    
    // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['ticket_id'])) {
            $ticket_id = e($_POST['ticket_id']);
            $query = "INSERT INTO tickets_message (ticket_id, sender, user, message, datetime) 
                      VALUES('$ticket_id', '$sender', '$user', '$message', '$datetime')";
            mysqli_query($conn, $query);
            
            
            if (count($success)== 0) { 
                array_push($success,  '   
                <div class="alert alert-success" role="alert">
<div class="container">
    <div class="alert-icon">
        <i class="zmdi zmdi-thumb-up"></i>
    </div>
    <strong>Selamat!</strong> Data Anda berhasil  Di input.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
            <i class="zmdi zmdi-close"></i>
        </span>
    </button>
</div>
</div>                                       
              
                '); 
            }
            
        }

    }

}

// return user array from their id
function getUserById($id){
    global $conn;

}

// LOGIN USER


// escape string
function e($val){
    global $conn;
    return mysqli_real_escape_string($conn, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0){
        echo '<div class="error">';
            foreach ($errors as $error){
                echo $error .'<br>';
            }
        echo '</div>';
    }
}

function success() {
    global $success;

    if (count($success) > 0){
        echo '<div class="error">';
            foreach ((array) $success as $success){
                echo $success .'<br>';
            }
        echo '</div>';
    }
   
}



?>
<?php
// including the database koneksi file
include_once("./../../config.php");


if(isset($_POST['update']))
{	
	
    $id = $_POST['id'];
    $last_update		= $_POST['last_update'];
$status		= $_POST['status'];
$seen_admin		= $_POST['seen_admin'];
$seen_user		= $_POST['seen_user'];


	// checking empty fields
	if(empty($last_update) || empty($status) || empty($seen_admin) || empty($seen_user)) {
				
		if(empty($last_update)) {
			echo "<font color='red'>Name field is empty last_update.</font><br/>";
        }
        
        if(empty($status)) {
			echo "<font color='red'>Name field is empty status.</font><br/>";
        }

        if(empty($seen_admin)) {
			echo "<font color='red'>Quantity field is empty seen_admin .</font><br/>";
        }

        if(empty($seen_user)) {
			echo "<font color='red'>Quantity field is empty seen_user.</font><br/>";
        }
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE tickets SET last_update='$last_update', status='$status', seen_admin='$seen_admin', seen_user='$seen_user' WHERE id=$id");
		
		
	}
}
?>
<!doctype html>
<html class="no-js " lang="en">

<!-- Main header -->
<?php
include "../header/header2.php"
?>
<!-- end header -->
<!-- Main Content -->
<div id="myModal" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="alert alert-warning">
                            <strong>Warning!</strong> 
                        </div>
            <div class="modal-body">
                <p>Silahkan Klik ubah status untuk membalas pesan </p>
                <form class="form-horizontal" role="form" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
								<div class="form-group row">
                                
									
                                    <div class="form-group row">
                                        <input type="text"  style="display:none;" name="last_update" class="form-control"  maxlength="50" readonly value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d : H:i:d'); ?>">
                                        <input type="text" style="display:none;" name="status" class="form-control"  maxlength="50" readonly value="Waiting">
                                        <input type="text" style="display:none;" name="seen_admin" class="form-control"  maxlength="50"  value="1">
                                        <input type="text" style="display:none;" name="seen_user" class="form-control"  maxlength="50" readonly value="1">
								</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
                                    <button  type="submit" class="btn btn-primary btn-round waves-effect" name="update" value="update">Ubah Status</button>
						     	    </div>
								</div>
							</form>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Tutup Tiket
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Tutup Tiket</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <h4>Tutup Tiket</h4>
                       
                        <div class="row">
                    <div class="offset-lg-2 col-lg-8">
                    	<a href="../tiket" class="btn btn-secondary btn-bordred m-b-20"><i class="fa fa-reply"></i> Kembali</a>
                        <div class="card-box">
                            <h4 class="m-t-0 text-uppercase header-title"><i class="fa fa-reply"></i> Balas Tiket</h4><hr>
							<?php echo display_error(); ?>
        <?php echo success(); ?>
							
							
							<div style="max-height: 400px; overflow: auto;">
                            <div class="alert alert-info alert-white text-right">
									<b><?php echo $user; ?></b><br /><?php echo $message; ?><br /><i class="text-muted" style="font-size: 10px;"><?php echo $datetime; ?></i>
								</div>
                                <?php
  $check_message = mysqli_query($mysqli, "SELECT * FROM tickets_message WHERE ticket_id = '$id' ORDER BY ticket_id DESC ");
  while($data_message = mysqli_fetch_array($check_message)) {                             
	if ($data_message['sender'] == "admin") {
		$msg_alert = "success";
		$msg_text = "";
		$msg_sender = "admin";
	} else {
		$msg_alert = "info";
		$msg_text = "text-right";
		$msg_sender = $data_message['user'];
    }
    ?>	
    <?php
    echo '
								<div class="alert alert-'.$msg_alert.' alert-white '.$msg_text.'">
									<b>'.$msg_sender.'</b><br />'.(nl2br($data_message['message'])).'<br /><i class="text-muted" style="font-size: 10px;">'.$data_message['datetime'].'</i>
                                </div>
                                ';
	
}
?>
							</div>
						</div>
						<div class="card-box">
							<form class="form-horizontal" role="form" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
								<div class="form-group row">
                                <div class="form-group row">
                                        <input type="text"  style="display:none;" name="ticket_id" class="form-control"  maxlength="50" readonly value="<?php echo $id; ?>">
                                        <input type="text" style="display:none;" name="sender" class="form-control"  maxlength="50" readonly value="user">
                                        <input type="text" style="display:none;" name="user" class="form-control"  maxlength="50" readonly value="<?php echo $user; ?>">
                                        <input type="text"  style="display:none;" name="datetime" class="form-control"  maxlength="50" readonly value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d : H:i:d'); ?>">


								</div>
									<div class="col-md-12">
										<textarea name="message" class="form-control" placeholder="Pesan" rows="3" maxlength="200"></textarea>
									</div>
                                   
								</div>
								<div class="form-group row">
									<div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-round waves-effect" name="Submit" value="add" >Balas</button>	
						     	    </div>
								</div>
							</form>
                            
						</div>
					</div>
				</div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main sidebar -->
<?php
include "../header/sidebar.php"
?>
<!-- end sidebar -->




<!-- Jquery Core Js --> 
<?php
include "../footer/footer2.php"
?>
</body>

</html>