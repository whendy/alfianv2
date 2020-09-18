<?php
include "views/session/session.php"
?>
<!doctype html>
<html class="no-js " lang="en">

<?php
include "header.php"
?>

<?php 

// connect to database
include_once("config.php");

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
    register();
}



// REGISTER USER
function register(){
    global $conn, $errors;

    // receive all input values from the form
    $nama    =  e($_POST['nama']);
    $username    =  e($_POST['username']);
    $email       =  e($_POST['email']);
    $password_1  =  e($_POST['password_1']);
    $password_2  =  e($_POST['password_2']);
    
    if (md5($_POST['pin']) <> $_SESSION['image_random_value'])
	{
	echo'<script>alert(\'Kode Captcha Salah ! !\')
	setTimeout(\'location.href="register"\' ,0);</script>';
	exit;
	}
    // form validation: ensure that the form is correctly filled
    if (empty($nama)) { 
        array_push($errors,                                           
        '   
        <div class="alert alert-danger" role="alert">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
             Nama Harus Di Isi !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>                                        
      
        '); 
    }
    if (empty($username)) { 
        array_push($errors,   '   
        <div class="alert alert-danger" role="alert">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            Username Harus Di Isi !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>                                        
      
        '); 
    }
    if (empty($email)) { 
        array_push($errors,   '   
        <div class="alert alert-danger" role="alert">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
             Email Harus Di Isi !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>                                        
      
        '); 
    }
    if (empty($password_1)) { 
        array_push($errors,  '   
        <div class="alert alert-danger" role="alert">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
            Password Harus Di Isi !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>                                        
      
        '); 
    }
    if ($password_1 != $password_2) {
        array_push($errors, '   
        <div class="alert alert-danger" role="alert">
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
      
        ');
    }
   

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = SHA1($password_1);//encrypt the password before saving in the database

        if (isset($_POST['hak_akses'])) {
            $hak_akses = e($_POST['hak_akses']);
            $query = "INSERT INTO users (nama, username, email, hak_akses, password) 
                      VALUES('$nama', '$username', '$email', '$hak_akses', '$password')";
            mysqli_query($conn, $query);
            $SE_SSION['success']  = "New user successfully created!!";
            echo'<script>alert(\'User Berhasil Di buat Silahkan Login\')
	setTimeout(\'location.href="login"\' ,0);</script>';
        }else{
            $query = "INSERT INTO users (nama, username, email, hak_akses, password) 
                      VALUES('$nama', '$username', '$email', 'user', '$password')";
            mysqli_query($conn, $query);
            

            // get id of the created user
            $logged_in_user_id = mysqli_insert_id($conn);

            $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
            $_SESSION['success']  = "You are now logged in";
            header('location: login');
            				
        }

    }

}

// return user array from their id
function getUserById($id){
    global $conn;
    $query = "SELECT * FROM users WHERE id=" . $id;
    $result = mysqli_query($conn, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
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

?>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form action="register" method="POST" action="#">
                    <div class="header">
                       
                        <h5>Sign Up</h5>
                        <span>Register a new membership</span>
                        
                    </div>
                    
                    <div class="content">                                                
                        <div class="input-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Panjang">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" name="username" placeholder="Enter User Name">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                        <label for="hak_akses" class="col-form-label" style="display:none;"> Level	</label>
										<input type="text" class="form-control" style="display:none;" id="hak_akses" name="hak_akses" placeholder="hak_akses" readonly value="user">
                        <div class="input-group">
                            <input type="password" placeholder="Password" name="password_1" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password Again" name="password_2" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>  
                        <div class="input-group input-lg">
                                                            
				<input class="form-control" type="text" name="pin" placeholder="Ketik kode di Samping" required>

                <span class="input-group-addon">
                <img src="captcha.php">
                            </span>
                    </div>                      
                    </div>
                    <?php echo display_error(); ?>
                        
                    <div class="footer text-center">
                    <button type="submit" class="btn btn-primary btn-round waves-effect" name="register_btn" value="add">Regis</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob, Count To, Sparkline Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
//=============================================================================
$('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
}).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
});
</script>
</body>

</html>