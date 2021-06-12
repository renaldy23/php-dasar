<?php 

if (isset($_POST["submit"])) {
	if ($_POST["username"]=="aing" && $_POST["password"]=="5678") {
		
		header("Location: admin.php");

	}
	else{
		$error=true;
	}
}

 ?>
<!DOCTYPE html>
<html>
	<head>
			<title>Login</title>
			<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Login Admin</h1>
		<?php if(isset($error)) : ?>
			<p style="color: red">Username dan password salah!</p>
		<?php endif; ?>
		<ul>
			<form action="" method="post">
				<li>
					<label for="username">Username:</label>
					<input type="text" name="username" id="username"></input>
				</li>

				<li>
					<label for="password">Password :</label>
					<input type="password" name="password" id="password"></input>
				</li>

				<li>
					<button type="submit" name="submit">Login</button>
				</li>
			</form>
		</ul>
	</body>
</html>