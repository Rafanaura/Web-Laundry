<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../../conn.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from user where username='".$username."' and password='".md5($password)."'");
// menghitung jumlah data yang ditemukan
// $row = mysqli_query($conn, $login);
// $data = mysqli_fetch_array($login);
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data_login = mysqli_fetch_assoc($login);


	// cek jika user login sebagai admin
	if($data_login['role']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		$_SESSION['id_user'] = $data_login['id_user'];
		// alihkan ke halaman dashboard admin
		header("location:../../pages/admin/dashboard-admin.php");

	// cek jika user login sebagai pegawai
	}else if($data_login['role']=="kasir"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "kasir";
		$_SESSION['id_user'] = $data_login['id_user'];
		// alihkan ke halaman dashboard pegawai
		header("location:../../pages/kasir/dashboard-kasir.php");
    }else if($data_login['role']=="owner"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "owner";
		$_SESSION['id_user'] = $data_login['id_user'];
		// alihkan ke halaman dashboard pegawai
		header("location:../../pages/owner/dashboard-owner.php");

	}else{

		// alihkan ke halaman login kembali
		// header("location:sign-in.php?pesan=gagal");
	}	
}else{
	header("location: sign-in.php?pesan=gagal");
}

?>