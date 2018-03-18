<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html>
<head>

	<title></title>

</head>
<body>
	<form action="login2.php" method="post">
	<p >Masukkan Username<br> <input type="text" class="box" name="user"></p>
	<p >Masukkan Password<br> <input type="Password" class="box" name="pwd"></p>
	<p ><input type="submit" class="tombol" value="Login" ></p>

	<p >Anda Menggunakan<br><br> <?php echo $browser?></p>
</form>
</body>
</html>