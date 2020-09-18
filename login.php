<?php
include "views/session/session.php"
?>

<!doctype html>
<html class="no-js " lang="en">

<?php
include "header.php"
?>

<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form action="ceklogin" method="post">
                    <div class="header">
                       
                        <h5>Log in</h5>
                        <?php echo $error;?>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" placeholder="Enter User Name" name="usernamemu">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="Password" class="form-control"  name="passwordmu"/>
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
                    <div class="footer text-center">
                        <button class="btn btn-primary btn-round btn-lg btn-block ">SIGN IN</button>
                    </div>
                </form>
                <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                    
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-12">
                                <div class="panel-group full-body" id="accordion_13" role="tablist" aria-multiselectable="true">
                                    <div class="panel l-coral">
                                        <div class="panel-heading" role="tab" id="headingOne_13">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_13" href="#collapseOne_13" aria-expanded="true" aria-controls="collapseOne_13"> Demo Klik Me </a> </h4>
                                        </div>
                                        <div id="collapseOne_13" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_13">
                                            <div class="panel-body"> Demo Admin : admin/123 <p> Demo User : dwiki/dwiki</div>
                                        </div>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                </div> -->
            </div>
            </div>
        </div>
    </div>
   
   
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

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