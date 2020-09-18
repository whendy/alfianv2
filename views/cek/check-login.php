<?php
session_start();

# check apakah ada akse post dari halaman login?, jika tidak kembali kehalaman depan
if( !isset($_POST['usernamemu']) ) { header('location:/'); exit(); }

# set nilai default dari error,
$error = '';

require ( './../../config.php' );

$username = trim( $_POST['usernamemu'] );
$password = trim( $_POST['passwordmu'] );

if( strlen($username) < 2 )
{
	# jika ada error dari kolom username yang kosong
	$error = '   
	<div class="alert alert-danger" role="alert">
		<div class="alert-icon">
			<i class="zmdi zmdi-block"></i>
		</div>
		<strong>Oh snap!</strong>Username Tidak boleh kosong !!!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">
				<i class="zmdi zmdi-close"></i>
			</span>
		</button>
	</div>                                        
  
	';
}else if( strlen($password) < 2 )
{
	# jika ada error dari kolom password yang kosong
	$error =  '   
	<div class="alert alert-danger" role="alert">
		<div class="alert-icon">
			<i class="zmdi zmdi-block"></i>
		</div>
		<strong>Oh snap!</strong>Password Tidak boleh kosong !!!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">
				<i class="zmdi zmdi-close"></i>
			</span>
		</button>
	</div>                                        
  
	';
}else{
	if (md5($_POST['pin']) <> $_SESSION['image_random_value'])
	{
	echo'<script>alert(\'Kode Captcha Salah ! !\')
	setTimeout(\'location.href="login"\' ,0);</script>';
	exit;
	}
	# Escape String, ubah semua karakter ke bentuk string
	$username = $koneksi->escape_string($username);
	$password = $koneksi->escape_string($password);

	# hash dengan md5
	$password = SHA1($password);

	# SQL command untuk memilih data berdasarkan parameter $username dan $password yang 
	# di inputkan
	$sql = "SELECT id, nama_user, email, userfile, keterangan, alamat, username, no, hak_akses FROM users 
			WHERE username='$username' 
			AND password='$password' LIMIT 1";

	# melakukan perintah
	$query = $koneksi->query($sql);

	# check query
	if( !$query )
	{
		die( 'Oops!! Database gagal '. $koneksi->error );
	}

	# check hasil perintah
	if( $query->num_rows == 1 )
	{	
		# jika data yang dimaksud ada
		# maka ditampilkan
		$row =$query->fetch_assoc();
		
		# data nama disimpan di session browser
		$_SESSION['id'] = $row['id']; 
		$_SESSION['nama_user'] = $row['nama_user']; 
		$_SESSION['email'] = $row['email'];
		$_SESSION['userfile'] = $row['userfile']; 
		$_SESSION['no'] = $row['no']; 
		$_SESSION['keterangan'] = $row['keterangan']; 
		$_SESSION['alamat'] = $row['alamat'];  
		$_SESSION['akses']	   = $row['hak_akses'];
		$_SESSION['username']	   = $row['username'];
		$_SESSION['hak_akses']	   = $row['hak_akses'];
		

		if( $row['hak_akses'] == 'admin')
		{
			# data hak Admin di set
			$_SESSION['saya_admin']= 'TRUE';
		}

		if( $row['hak_akses'] == 'user')
		{
			# data hak Admin di set
			$_SESSION['saya_user']= 'TRUE';
		}

		if( $row['hak_akses'] == 'member')
		{
			# data hak Admin di set
			$_SESSION['saya_member']= 'TRUE';
		}

		# menuju halaman sesuai hak akses
		header('location:'.$url.'/'.$_SESSION['akses'].'/');
		exit();

	}else{
		
		# jika data yang dimaksud tidak ada
		$error = '   
        <div class="alert alert-danger" role="alert">
            <div class="alert-icon">
                <i class="zmdi zmdi-block"></i>
            </div>
             Login gagal, Akun Pengguna atau Kata Sandi anda salah
			!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                </span>
            </button>
        </div>                                        
      
        ';
	}

}

if( !empty($error) )
{
	# simpan error pada session
	$_SESSION['error'] = $error;
	header('location:'.$url.'/login');
	exit();
}