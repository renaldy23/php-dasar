<?php 

// Melakukan pengulangan pada Array (foreach)

$angka=[3,2,15,20,11,77,89,8,10];

 ?>
 <!DOCTYPE html>
 <html>
	 <head>
	 		<title>Latihan 2</title>
	 		<style>
	 			.kotak{
	 				width: 50px;
	 				height: 50px;
	 				background-color: red;
	 				text-align: center;
	 				line-height: 50px;
	 				margin: 3px;
	 				float: left;
	 			}
	 			#kotak{
	 				width: 50px;
	 				height: 50px;
	 				background-color: grey;
	 				text-align: center;
	 				line-height: 50px;
	 				margin: 3px;
	 				float: left;
	 			}
	 			.clear{
	 				clear: both;
	 			}
	 		</style>
	 </head>
	 <body>
	 	<?php for ($i=0; $i<count($angka); $i++) {  ?>
	 		<div class="kotak"><?= $angka[$i] ?></div>
	 	<?php } ?>

	 	<div class="clear"></div>

	 	<?php foreach ( $angka as $a ) { ?>
	 		<div id="kotak"><?php echo $a; ?></div>
	 	<?php } ?>

	 	<div class="clear"></div>

	 	<?php foreach ( $angka as $a ) : ?>
	 		<div id="kotak"><?= $a; ?></div>
	 	<?php endforeach ?>
	 </body>
 </html>