<?php 

if ( 
	!isset($_GET["nama"]) || 
	!isset($_GET["rilis"])||
	!isset($_GET["director"])||
	!isset($_GET["genre"])||
	!isset($_GET["gambar"])) {
	header("Location: latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
			<title>Movie Detail</title>
			<style>
				img{
					width: 200px;
					height: 300px;
				}


			</style>
	</head>
	<body>
		<ul>
			<li>
				<img src="img/<?php echo $_GET["gambar"]; ?>">
			</li>
			<li><?php echo $_GET["nama"]; ?></li>
			<li><?php echo $_GET["rilis"]; ?></li>
			<li><?php echo $_GET["director"]; ?></li>
			<li><?php echo $_GET["genre"]; ?></li>
		</ul>

		<a href="latihan1.php">Kembali =></a>
	</body>
</html>