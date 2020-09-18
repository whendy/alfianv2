  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <?php
//including the database koneksi file

$kurang = mysqli_query($mysqli, " select * from barang where jumlah <=3  ");
$kurang = mysqli_num_rows($kurang);
?>
          <span class="badge badge-danger navbar-badge"><?php echo $kurang; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
     
        <?php 
                    

$result = mysqli_query($mysqli, "select * from barang where jumlah <=3");

    while($q = mysqli_fetch_array($result)) {
	if($q['jumlah']<=3){	
		?>	<?php
    echo '
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="./../'. $q['gambar_barang'].'" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                '. $q['nama_barang'].' | Stok:'. $q['jumlah'].'
                  <span class="float-right text-sm text-muted"></span>
                </h3>
                <p class="text-sm"> Stok '. $q['nama_barang'].' Tersisa Kurang Dari 3,Kuy Segera di beli.Rp.'.(number_format($q['harga'])).'</p>
              </div>
            </div>
            <!-- Message End -->
          </a>';
        }
      }
      ?>

          
          <div class="dropdown-divider"></div>
          <a href="barang" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link">
      <img src="../<?php echo $gambar2;?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../<?php echo $gambar3;?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nama;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="./" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profile/<?php echo $id;?>" class="nav-link">
            <i class="nav-icon fas fa-user-alt"></i>
          
              <p>
              Profile
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            
            <i class="nav-icon fas fa-flag"></i>
              <p>
              Banner
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="baner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kobaner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komentar Baner</p>
                </a>
              </li>
             
            </ul>
          </li>
             
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Page Halaman
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="halaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Halaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kahalaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Halaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kohalaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komentar Halaman</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
              Dagangan
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="barang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="penjualan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penjualan</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-image"></i>
              <p>
              Foto Projek
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="foto" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Foto Projek</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kafoto" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kategori Projek</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-blog"></i>
              <p>
              Blog/Artikel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="blog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Postingan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="koblog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komentar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kablog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            
            <i class="nav-icon fas fa-info-circle"></i>
              <p>
              Info
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kontak" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kontak Pesan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tiket" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tiket Pesan</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="setting" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
            
              <p>
              Pengaturan Website
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              
            
              <p>
              Keluar
              </p>
            </a>
          </li>        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>