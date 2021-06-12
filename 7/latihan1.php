<?php 
// Variable Superglobals (Array Associative)
// $_GET
$siswa=[
			[
				"Nama"=>"Avengers Endgame" , 
				"Rilis"=>"24 April 2019" , 
				"Director"=>"Joe Russo , Anthony Russo" , 
				"Genre"=>"Fiksi",
				"Gambar"=>"16.jpg"
			],
			[
				"Nama"=>"Aquaman" , 
				"Rilis"=>"21 Desember 2018" , 
				"Director"=>"James Wan" , 
				"Genre"=>"Fiksi",
				"Gambar"=>"17.jpg"
			],
			[
				"Nama"=>"Fast Five" , 
				"Rilis"=>"12 Agustus 2011" , 
				"Director"=>"Justin Lin" , 
				"Genre"=>"Action",
				"Gambar"=>"18.jpg"
			]

		];
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV


?>
<!DOCTYPE html>
<html>
	<head>
			<title>Daftar Film</title>
			<style>

				img{
					width: 200px;
					height: 300px;
				}

			</style>
	</head>
	<body>
		<h1>Daftar Film</h1>
		<ul>
			<?php foreach($siswa as $s) : ?>
				<li>
					<a href="latihan2.php?nama=<?php echo $s["Nama"]; ?>&rilis=<?php echo $s["Rilis"]; ?>&director=<?php echo $s["Director"]; ?>&genre=<?php echo $s["Genre"]; ?>&gambar=<?php echo $s["Gambar"]; ?>"><?php echo $s["Nama"]; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
		
	</body>
</html>