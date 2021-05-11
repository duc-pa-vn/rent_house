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
	<h1>DANG TIN</h1>
	<div>
		<form action="http://localhost:8088/public?url=houses/addHouse" method="POST" class="form">
			<div class="">
				<p>khu vuc<p/>
				<select name="site" id="site">
					<option value="">tat ca khu vuc</option>
					<option value="hai ba trung">hai ba trung</option>
					<option value="hoan kiem">hoan kiem</option>
					<option value="dong da">dong da</option>
					<option value="hoang mai">hoangmai</option>
					<option value="thanh xuan">thanh xuan</option>
				</select>
			</div>
			<div class="">
				<p>gia</p>
				<input type="tel" name="cost" pattern="[0-9]{6,9}" required="required">
			</div>
			<div class="">
				<p>dien tich</p>
				<input type="tel" name="s" pattern="[0-9]{1,4}" required="required">
			</div>
			<div class="margin1">
				<p><label for="type">loai nha</label></p>
				<select name="type" id="type">
					<option value="chung cu mini">chung cu mini</option>
					<option value="phong tro">phong tro</option>
					<option value="nha nguyen can">nha nguyen can</option>
				</select>
			</div>
			<div class="">
				<p>anh chinh</p>
				<input type="file" name="main_img">
			</div>
			<div class="">
				<p>anh them</p>
				<input type="file" name="extra_img" multiple>
			</div>
			<br>
			<button type="submit" name="submit">submit</button>
		</form>
	</div>
	
</body>
</html>