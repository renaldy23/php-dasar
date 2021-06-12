<?php 
function salam($waktu , $nama) {
	return "Selamat $waktu , $nama";
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Latihan Fungction</title>
	</head>
	<body>
	 	<h1><?= salam("Malam","Muhammad Renaldy"); ?></h1>
	 	<h3><?= date("l , d-M-Y"); ?></h3>
	</body>
</html>