<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		ul#ulheader li{
			display: inline;
			padding: 20px;
		}
		#divheader{
			text-align: right;
			margin-right: 2px;
		}
		.form{
			border: solid;
			padding: 10px;
		}
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<?php 
		echo "<pre>";
		print_r($list);
		echo "</pre>";
	 ?>
</body>
</html>