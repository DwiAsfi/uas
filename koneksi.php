<?php
	//membuat koneksi database
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'uas';

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if (!$koneksi) {
		echo "error : " .mysqli_connect_error($koneksi);
	}
?>