<?php
session_start();
if(!isset($_SESSION['userid'])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Home</title>
</head>
<body>
	<h1>Halaman Home</h1>
<p>selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="album.php">Album</a></li>
	<li><a href="foto.php">Foto</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
</body>
</html>