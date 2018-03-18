<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.tengah {
			text-align: center;
			font-size: 30px;
			color: #c9c9ff;
			font-family: arial;
			margin-top: 250px;
			margin-bottom: auto;
			font-weight: bold;
		}
	</style>
</head>
<body>
<p class="tengah">
	<?php 
session_start();
$username = $_REQUEST['user'];
$password = $_REQUEST['pwd'];
if ($username == 'faiz' and 
    $password == 'rahasia') {
	$_SESSION['login'] = true;
	echo 'Login Berhasil';
	header("refresh:3; url=session.php");
} 
else {
	echo 'Username Atau Password Anda Salah';
	header("refresh:2; url=login.php");
}
?>

</p>
<h4 style="text-align: center;">Redirecting...</h4>
</body>
</html>