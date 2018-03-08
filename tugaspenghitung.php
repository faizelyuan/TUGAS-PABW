<?php
	$Volume = 0;
	$Luas = 0;
		if (isset($_POST['submit'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $konstanta = $_POST['konstanta'];
        $tinggiA =$_POST['tinggiA'];
        $sisiAlas = $_POST['sisiAlas'];
        function volume($a, $t, $kons, $tA)
        {
            $volume = ($kons * $tA * 2)*$t;
            return $volume;
        }
        function luas($a, $t, $kons, $tA, $sA)
        {
            $luas = ($kons * $tA * 2) + ($tA * $t) + ($a * $t) + ($sA * $t);
            return $luas;
        }
        $volume = volume($alas, $tinggi, $konstanta, $tinggiA);
        $luas = luas($alas, $tinggi, $konstanta, $tinggiA, $sisiAlas); 
    }
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Penghitung Volume & Luas Prisma Segitiga</title>
	</head>
	<body>
		<h1>Penghitung Volume dan Luas Permukaan Prisma Segitiga</h1>
		<form action="" method="post">
		<label for="alas">Alas : </label><br>
        <input type="text" name="alas" id="alas"><br>
        <label for="tinggiA">Tinggi Alas: </label><br>
        <input type="text" name="tinggiA" id="tinggiA"><br>
        <label for="sisiAlas">Sisi Miring Alas: </label><br>
 		<input type="text" name="sisiAlas" id="sisiAlas"><br>
 		<label for="tinggi">Tinggi Prisma: </label><br>
 		<input type="text" name="tinggi" id="tinggi"><br>
        <input type="hidden" name="konstanta" value="0.5">
        <input type="submit" name="submit" value="Hasil"><br>
        <label for="volume">Volume : </label> <br>
        <input type="text" name="volume" value="<?php echo $volume;?>" id="volume"> <br>
        <label for="luas">Luas Permukaan : </label> <br>
        <input type="text" name="luas" value="<?php echo $luas ?>" id="luas"> <br>
	</form>
	</body>
	</html>