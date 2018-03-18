<?php
session_start();
    if(isset($_SESSION))
        $login = $_SESSION['login'];
        
    if($login == true) {
        date_default_timezone_set('Asia/Jakarta');
        if (date('G') >= 0 and date('G') <= 10) {
        	echo $browser;
        	echo '<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang!</title>
	<style type="text/css">
		.tengahin{
			text-align: center;
			font-family: verdana;
			font-size: 90px;
			color: #d8d7d0;
			margin-top: 200px;
			text-shadow: 2px 2px #969696;
		}
		.background{
			background-image: url(gambar1.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body class="background">
<p class="tengahin">Selamat Pagi.</p>
</body>
</html>';
        }
        elseif (date('G')>= 11 and date('G') <= 15) {
        	echo '<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang!</title>
	<style type="text/css">
		.tengahin{
			text-align: center;
			font-family: verdana;
			font-size: 90px;
			color: #5c6a82;
			margin-top: 250px;
			text-shadow: 2px 2px #ffffff;
		}
		.background{
			background-image: url(gambar2.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body class="background">
<p class="tengahin">Selamat Siang.</p>
</body>
</html>';
        }
        elseif (date('G')>=16 and date('G')<=18) {
        	echo '<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang!</title>
	<style type="text/css">
		.tengahin{
			text-align: center;
			font-family: verdana;
			font-size: 90px;
			color: #586882;
			margin-top: 200px;
			text-shadow: 2px 2px #192230;
		}
		.background{
			background-image: url(gambar3.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body class="background">
<p class="tengahin">Selamat Sore.</p>
</body>
</html>';
        }
        elseif (date('G') >= 19 and date('G') <= 24) {
        	echo '<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang!</title>
	<style type="text/css">
		.tengahin{
			text-align: center;
			font-family: verdana;
			font-size: 90px;
			color: #ffffff;
			margin-top: 200px;
			text-shadow: 2px 2px #192230;
		}
		.background{
			background-image: url(gambar4.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body class="background">
<p class="tengahin">Selamat Malam.</p>
</body>
</html>';
        }
    } else {
        echo '
        <!DOCTYPE html>
        <html>
        <head>
        	<title></title>
        	<style>
		.tengahin {
			text-align: center;
			font-size: 30px;
			color: #a7bb9f;
			font-family: arial;
			margin-top: 250px;
			margin-bottom: auto;
			font-weight: bold;
		}
	</style>
        </head>
        <body>
        <p class="tengahin">
        Anda Belum Login </p>
        <p style="font-size: 15px; text-align: center;">
        Redirecting...</p>
        </body>
        </html>';
        header("refresh:2; url=login.php");
    }
?>