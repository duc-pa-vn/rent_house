<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="import" href="home.php">
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
		.margin1{
			margin: 5px;
		}
		.text1{
			width: 50px;
		}
		#filterform{
			border: solid;
			width: 300px;
			height: 500px;
			display: inline-block;
		}
		.align1{
			text-align: center;
		}
		#listhouse{
 
			border: solid;
			display: inline-block;
		}
		.image1{
			width: 
		}
		.display1{
			display: inline-block;
		}
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<div id="filterform">
		<form action="#">
			<h2 class="margin1 align1">tim kiem</h2>
			<div class="margin1">
				<p>khu vuc<p/>
				<input type="text" name="addr" id="khuvuc" class="text1">	
			</div>
			<div class="margin1">
				<p>gia</p>
				<label for="from">tu</label>
				<input type="text" name="from" id="from" class="text1">
				<label for="to" >den</label>
				<input type="text" name="to" id="to" class="text1">
			</div>
			<div class="margin1">
				<p><label for="s">dien tich</label></p>
				<input type="text" name="from" id="from" class="text1">
				<input type="text" name="to" id="to" class="text1">
			</div>
			<div class="margin1">
				<label for="type">loai nha</label>
			</div>
		</form>
	</div>
	<div id="listhouse">
		<div >
			<div class="display1">
				<img src="<?php echo"#"?>" class="image1">
			</div>

		</div>

	</div>
</div>
</body>
</html>	