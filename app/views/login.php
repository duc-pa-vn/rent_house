<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<div>
		<div>
			<h2>Sign in</h2>
			<form action="#" method="POST">
				<input type="text" name="username">
				<span><?php echo $data['usernameError']; ?></span>
				<input type="text" name="password">
				<span><?php echo $data['passwordError'] ?></span>
				<button id="submit" type="submit" value="submit">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>