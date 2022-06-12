<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bimbel AHE</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background-image:url(img/login.png); background-size: cover; background-repeat: no-repeat;
	background-position: center; background-attachment: fixed; height: 100%;">
	<div class="box">
		<img src="img/ahe.png" class="gambar">
		<h1>Bimbel AHE</h1>
		<form action="cek_login.php" method="post">
			<input type="text" name="username" placeholder="Enter Username">
			<input type="password" name="password" placeholder="Enter Password">
			<a href="home.php"><button class="login">Login</button></a>
		</form>
	</div>
</body>
</html>