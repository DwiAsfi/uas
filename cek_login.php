<?php 
	//mengaktifkan session pada php
	session_start();

	//menghubungkan php dengan koneksi database
	include 'koneksi.php';

	//menangkap data yang dikirim dari form login
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//menyeleksi data user dengan username dan password yang sesuai
	$login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' and password='$password'");
	//menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);

	//cek apakah username dan password ditemukan pada database
	if($cek > 0) {
		$data = mysqli_fetch_assoc($login);

		//cek jika user login sebagai admin
		if($data['level']=="admin") {
			//buat session login dan username
			$_SESSION['login'] = true;
			$_SESSION['nama'] = $data['nm_user'];
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			//alihkan ke halamaan dashboard admin
			header("location:home_admin.php");

		//cek jika user login sebagai mentor
		}else if($data['level']=="mentor") {
			//buat session login dan username
			$_SESSION['login'] = true;
			$_SESSION['nama'] = $data['nm_user'];
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "mentor";
			//alihkan ke halamaan dashboard mentor
			header("location:home_mentor.php");

		//cek jika user login sebagai siswa
		}else if($data['level']=="siswa") {
			//buat session login dan username
			$_SESSION['login'] = true;
			$_SESSION['nama'] = $data['nm_user'];
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "siswa";
			//alihkan ke halamaan dashboard siswa
			header("location:home_siswa.php");

		}else {
			//alihkan ke halaman login kembali
			header("location:index.php");
		}
	}else{
		header("location:index.php");
	}
?>