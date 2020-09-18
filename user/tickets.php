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

// connect to database
include_once("./../config.php");

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
    $user    =  e($_POST['user']);
    $subject    =  e($_POST['subject']);
    $message    =  e($_POST['message']);
    $datetime    =  e($_POST['datetime']);
    $last_update    =  e($_POST['last_update']);
   
    // form validation: ensure that the form is correctly filled
    if (empty($user)) { 
        array_push($errors,  '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Keterangan user Harus Di isi)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        '); 
    }

    if (empty($subject)) { 
        array_push($errors,  '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Keterangan subject Harus Di isi)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        '); 
    }

    if (empty($message)) { 
        array_push($errors,  '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Keterangan message  Harus Di isi)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        '); 
    }

    if (empty($datetime)) { 
        array_push($errors,  '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Keterangan Time Date Harus Di isi)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        '); 
    }
     
    if (empty($last_update)) { 
        array_push($errors,  '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Keterangan Last_update Harus Di isi)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        '); 
    }
    // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['subject'])) {
            $subject = e($_POST['subject']);
            $query = "INSERT INTO tickets (user, subject, message, datetime, last_update) 
                      VALUES('$user', '$subject', '$message', '$datetime', '$last_update')";
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
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Data Tiket/Bantuan
                
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="../"><i class="zmdi zmdi-home"></i> Oreo</a></li>                 
                    <li class="breadcrumb-item active">Tickets</li>
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
                       
                                  <!-- search -->

                                  <div class="col-lg-5 col-md-5 col-6">
                            <form  method="get">  
        <select type="submit" name="status" class="form-control show-tick" onchange="this.form.submit()">
			<option>Pilih Berdasarkan Status</option>
            <option>Pending</option>
                <option>Responded</option>
                <option>Closed</option>
                <option>Waiting</option>	
		</select>	                                                         
		</form>
        </div>
        <!-- search -->
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <?php echo display_error(); ?>
        <?php echo success(); ?>
         
                                   
                       
            

            <div class="row clearfix">
                            <div class="col-sm-6">
                            <div class="card-box">
                            <h4 class="m-t-0 text-uppercase header-title"><i class="mdi mdi-comment-text-outline"></i> Buat Tiket</h4><hr>
                          
							<div class="alert alert-info">
                                Tata cara pengisian form subjek:
                                <ul>
                                    <li>ORDER : Masalah mengenai dengan pemesanan.</li>
				                    <li>DEPOSIT : Masalah mengenai dengan deposito.</li>
					                <li>OTHER : Masalah mengenai dengan hal lainnya.</li>
							    </ul>
							</div>
							
							<form class="form-horizontal" role="form" method="POST" action="tiket">
                            <div class="form-group row">
										<input type="text" style="display:none;" name="user" class="form-control"  maxlength="50" readonly value="<?php echo $username ?>">
								</div>
								<div class="form-group row">
									<label class="col-md-2 control-label">Subjek</label>
									<div class="col-md-10">
										<input type="text" name="subject" class="form-control" placeholder="Masukan subjek" maxlength="50">
									</div>
								</div>
                               
								<div class="form-group row">
									<label class="col-md-2 control-label">Pesan</label>
									<div class="col-md-10">
										<textarea name="message" class="form-control" placeholder="Masukan pesan dari tiket." rows="3" maxlength="200"></textarea>
									</div>
								</div>
                                <div class="form-group row">
										<input type="text" style="display:none;" name="datetime" class="form-control"  maxlength="50" readonly value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d : H:i:d'); ?>">
                                        <input type="text"  style="display:none;" name="last_update" class="form-control"  maxlength="50" readonly value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d : H:i:d'); ?>">
                                   
								</div>
								<div class="form-group row">
                                    <div class="offset-lg-2 col-lg-8">
                                        <button type="reset" class="btn btn-secondary btn-bordred"><i class="fa fa-refresh"></i> Reset </button>  
                                        <button type="submit" class="btn btn-custom btn-bordred" name="Submit" value="add"><i class="fa fa-send"></i> Submit </button>   
                                    </div>
                                </div>
                            </form>
                        </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="card-box">
                            <h4 class="m-t-0 text-uppercase header-title"><i class="mdi mdi-refresh"></i> Riwayat</h4><hr>
							
                    <div class="body table-responsive">
                        

                    <?php
                                $batas   = 10;
                                $halaman = addslashes(@$_GET['halaman']);
                                if(empty($halaman)){
                                    $posisi  = 0;
                                    $halaman = 1;
                                }
                                else{ 
                                  $posisi  = ($halaman-1) * $batas; 
                                }
                                
                                // Langkah 2. Sesuaikan query dengan posisi dan batas
                                $query  = "SELECT * FROM tickets WHERE user = '$username' ORDER BY id DESC LIMIT $posisi,$batas";
                                $tampil = mysqli_query($mysqli, $query);
                                
                                  echo '  <table class="table table-hover m-b-0 c_list">
                                  <thead>
                                      <tr>
                                      <td>Subjek</td>
                                      <td>Status</td>
                                      <td>Terakhir diperbarui</td>
                                      
                                     
                                                  
                                                 
                                          
                                      </tr>
                                  </thead>
                                      <tbody>';
                                            $no = $posisi+1;
                                        $no = 1;
 
                                        if(addslashes(isset($_GET['status']))){
                                            $status = addslashes($_GET['status']);
                                            $tampil = mysqli_query($mysqli,"select * from tickets where status LIKE '%$status%'");
                                        }
		while($res = mysqli_fetch_array($tampil)) {	
            if ($res['status'] == 'Closed') {
                $label = "danger";
            } else if ($res['status'] == "Responded") {
                $label = "success";
            } else if ($res['status'] == "Waiting") {
                $label = "info";
            } else {
                $label = "warning";
            }
            echo "<tr>";
            echo '<td> <a href="balas/'.$res['id'].'">'.$res['subject'].'</a></td>';
            echo '<td><a class="btn btn-sm btn-bordred btn-'.$label.'">'.$res['status'].'</a></td>';
            
            echo "<td>".$res['last_update']."</td>";
         
           
            
            
            
                                                 echo "</tr>";



        }
        echo "</tbody>";
        
        echo "</table>";
		?>

<nav>
                                        <ul class="pagination pagination-split">
                                           
                                            <?php
 $query2     = mysqli_query($mysqli, "select * from tickets");
 $jmldata    = mysqli_num_rows($query2);
 $jmlhalaman = ceil($jmldata/$batas);
 
 if(!empty($halaman) && $halaman != 1)
{
$previous=$halaman-1;
echo '<li class="page-item">
<a class="page-link" href="tickets.php?halaman='.$previous.'" aria-label="Previous">
    <span aria-hidden="true">&laquo;</span>
    <span class="sr-only">Previous</span>
</a>
</li>';
}
 for($i=1;$i<=$jmlhalaman;$i++)
 if ($i != $halaman){
     echo '<li class="page-item"><a class="page-link" href="tickets.php?halaman='.$i.'">'.$i.'</a></li>';
 }
 else{ 
    echo '<li class="page-item active"><a class="page-link" >'.$i.'</a></li>';

 }
 if($halaman < $jmlhalaman)
{
$next=$halaman+1;
echo'<li class="page-item">
                                                <a class="page-link" href="tickets.php?halaman='.$next.'" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>';
}

                  ?>      
                                           
                                           
                                          
                                            
                                        </ul>
                                    </nav>  
                                   

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

