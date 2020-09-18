<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Pandanux</title>
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="../../assets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="../../assets/css/blog.css">
<link rel="stylesheet" href="../../assets/css/main.css">
<link rel="stylesheet" href="../../assets/css/color_skins.css">
<link rel="stylesheet" href="../../assets/css/ecommerce.css">
<script src="../../js/jquery.min.js"></script>
<link href="../../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<link href="../../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<script>
    $(document).ready(function(){
        
        $("#myModal").modal('show');
    });
</script>


</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="../../assets/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../"><img src="../../assets/logo.svg" width="30" alt="Oreo"><span class="m-l-10">Oreo</span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        
        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="body">
                    <ul class="menu list-unstyled">
                    <?php 
$result = mysqli_query($mysqli, "select * from barang where jumlah <=3");

    while($q = mysqli_fetch_array($result)) {
	if($q['jumlah']<=3){	
		?>	
		<?php
        echo '
        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src=".././../'. $q['gambar'].'" width="50" height="50" alt="">
                                    <div class="media-body">
                                        <span class="name">'. $q['nama'].' <span class="time">Stok:'. $q['jumlah'].'</span></span>
                                        <span class="message">Stok Tersisa Kurang Dari 3,Kuy Segera di beli.Rp.'.(number_format($q['harga'])).'</span>                                        
                                    </div>
                                </div>
                            </a>
                        </li>';
	}
}
?>
                                                
                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
            </ul>
        </li>
        
               
        <li class="float-right">
            <a href="../logout" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
        </li>
    </ul>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>Oreo</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user"><i class="zmdi zmdi-account m-r-5"></i>User</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile/<?php echo $id;?>"><img src=".././../<?php echo $userfile;?>" alt="User"></a></div>
                            <div class="detail">
                                <h4><?php echo $nama;?></h4>
                                <small><?php echo $keterangan;?></small>                        
                            </div>
                                                        
                        </div>
                    </li>
                    <li class="header">MAIN</li>
                    <li> <a href="../../"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li> <a href="../profile/<?php echo $id;?>"><i class="zmdi zmdi-apps"></i><span>Profile</span></a></li>
                    
                    
                    <li> <a href="../blog" ><i class="zmdi zmdi-blogger"></i><span>Blog</span> </a>
                    <li> <a href="../foto"><i class="zmdi zmdi-copy"></i><span>Foto</span></a></li>
                    <li> <a href="../tiket"><i class="zmdi zmdi-swap-alt"></i><span>Tiket/Bantuan</span></a></li>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="profile"><img src="../../<?php echo $userfile;?>" alt="User"></a></div>
                            <div class="detail">
                                <h4><?php echo $nama;?></h4>
                                <small><?php echo $keterangan;?></small>                        
                            </div>
                            <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                            <p class="text-muted"><?php echo $alamat;?></p>
                            
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Email address: </small>
                        <p><?php echo $email;?></p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p><?php echo $no;?></p>
                        <hr>
                                             
                    </li>
                </ul>
            </div>
        </div>
    </div>    
</aside>

<!-- Right Sidebar -->
