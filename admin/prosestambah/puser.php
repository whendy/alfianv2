<?php 

// connect to database
include_once("./../config.php");

// variable declaration

$errors   = array(); 
$success   = array(); 
// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
    register();
}



// REGISTER USER
function register(){
    global $conn, $errors;
    global $conn, $success;
    // receive all input values from the form
    $nama_user    =  e($_POST['nama_user']);
    $username    =  e($_POST['username']);
    $email       =  e($_POST['email']);
    $password_1  =  e($_POST['password_1']);
    $password_2  =  e($_POST['password_2']);
    $foto = $_FILES['foto']['name'];    
    $tmp = $_FILES['foto']['tmp_name']; 
   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    $acak           = mt_rand(1,999999);
     $userfile = "foto/".$acak.$foto;
     $direktori   = "./../foto/".$userfile;
  
    move_uploaded_file($_FILES['foto']['tmp_name'], "./../foto/".$acak.$_FILES['foto']['name']);

    // form validation: ensure that the form is correctly filled
    if (empty($nama)) { 
        array_push($errors, '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Nama Belum di Isi !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        '); 
    }
    if (empty($username)) { 
        array_push($errors,  '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Username Belum di Isi !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        '); 
    }
    if (empty($email)) { 
        array_push($errors,  '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Email Belum di Isi !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        '); 
    }
    if (empty($password_1)) { 
        array_push($errors,  '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Password Belum di Isi !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        '); 
    }
    if ($password_1 != $password_2) {
        array_push($errors, '   
        <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            <strong>Oh snap!</strong> Input user gagal,(psw ke 2 tidak sama dengan yang ke 1)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>
        </div>                                        
      
        ');
    }
    if (empty($userfile)) { 
        array_push($errors, "Foto"); 
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = SHA1($password_1);//encrypt the password before saving in the database

        if (isset($_POST['hak_akses'])) {
            $hak_akses = e($_POST['hak_akses']);
            $query = "INSERT INTO users (nama, username, email, hak_akses, password, userfile) 
                      VALUES('$nama', '$username', '$email', '$hak_akses', '$password', '$userfile')";
            mysqli_query($conn, $query);

            
        }else{
            $query = "INSERT INTO users (nama, username, email, hak_akses, password, userfile) 
                      VALUES('$nama', '$username', '$email', 'user', '$password', '$userfile')";
            mysqli_query($conn, $query);

            if (count($success)== 0) { 
                array_push($success,  '   
                <div class="alert alert-success" role="alert">
<div class="container">
    <div class="alert-icon">
        <i class="zmdi zmdi-thumb-up"></i>
    </div>
    <strong>Selamat!</strong> Data Anda berhasil Di input.
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
<div class="modal fade" id="addpost" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="title" id="defaultModalLabel">Add User</h4>
          
        </div>
        <div class="modal-body">
        <form action="user.php" method="POST" enctype='multipart/form-data' class="form-horizontal" >

            
            <div class="form-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="nama" placeholder="nama" ">
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="username" placeholder="username" ">
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="email" placeholder="email" ">
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                    <input type="password" class="form-control" name="password_1" placeholder="password" ">
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                    <input type="password" class="form-control" name="password_2" placeholder="password Again" ">
                </div>
            </div>
            <div class="form-group">
            <div class="col-lg-6 col-md-6">
                            <p> <b>Kategori</b> </p>
                            <select name="idkategori" id="idkategori"  class="form-control show-tick ms select2" data-placeholder="Select">
                            <option value="0">Please select</option>
                            <option value="admin">admin</option>
                <option value="member">member</option>
                <option value="user">user</option>
                            </select>
                        </div>
                        </div>
            
                        <div class="form-group">
                                                <input type="file" id="foto" name="foto" class="form-control-file" onchange="PreviewImage();">
                                            </div> 
                
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-round waves-effect" name="register_btn" value="add">Add</button>
            <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
        </div>
</form>
    </div>
</div>
</div>