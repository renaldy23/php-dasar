<!DOCTYPE html>
<html>
	<head>
			<title>Post</title>
	</head>
	<body>
		<?php if(isset($_POST['submit'])): ?>
			<h1>Halo Selamat Datang , <?php echo $_POST["nama"] ?></h1>
		<?php endif; ?>


		<form action="" method="post">
			Masukkan nama :
			<input type="textfield" name="nama"></input>
			<br>
			<button type="submit" name="submit">Kirim</button>
		</form>


	</body>
</html>