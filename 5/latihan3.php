<?php 

$siswa=[
		["Muhammad Renaldy Ramadhan" , "191114473" , "
		Rekayasa Perangkat Lunak" , "renaldyramadhan567@gmail.com"],

		["Mahesya Setia Nugraha" , "191114470" , "
		Rekayasa Perangkat Lunak" , "mahezl@gmail.com"],

		["Muhammad Jalaludin Qurthubi" , "191114472" , "
		Rekayasa Perangkat Lunak" , "JarQUB@gmail.com"]
];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Daftar Siswa</title>
	</head>
	<body>
		<h1>Daftar Siswa</h1>

		<?php foreach($siswa as $s) : ?>
			<ul>
				<li>Nama 				   : <?php echo $s[0]; ?></li>
				<li>NIS 			       :<?php echo $s[1]; ?></li>
				<li>Kompetensi Keahlian    :<?php echo $s[2]; ?></li>
				<li>E-mail                 :<?php echo $s[3]; ?></li>
			</ul>
		<?php endforeach; ?>
	</body>
</html>