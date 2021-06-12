<?php 

// $siswa=[["Muhammad Renaldy Ramadhan","191114473" , "	renaldyramadhan567@gmail.com" , "
//Rekayasa Perangkat Lunak"],
//["Mahesya Setia Nugraha","191114470" , "blabla@gmail.com" , "Rekayasa Perangkat Lunak"],

// Array Associative
// key adalah string yg dibuat sendiri

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

		<?php foreach($siswa as $s) : ?>
			<ul>
				<li>
					<img src="img/<?php echo $s["Gambar"] ?>">
				</li>
				<li>Nama    :<?php echo $s["Nama"]; ?></li>
				<li>Rilis     :<?php echo $s["Rilis"]; ?></li>
				<li>Director  :<?php echo $s["Director"]; ?></li>
				<li>Genre :<?php echo $s["Genre"]; ?></li>
			</ul>
		<?php endforeach; ?>
	</body>
</html>