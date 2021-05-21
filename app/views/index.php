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
			display: inline-block;
		}
		.text1{
			width: 50px;
		}
		#filterform{
			border: solid;
			/*width: 15%;*/
			/*height: 500px;*/
			/*display: inline-block;*/
			margin-top: -10px;
		}
		.align1{
			text-align: center;
		}
		#listhouse{
			/*border: solid;*/
			display: inline-block;
			width: 84%;
		}
		.item_house{
			border: dotted;
		}
		img.main_img{
			width: auto;
			height: 100px;
			/*display: inline-block;*/
		}
		img.item_img{
			width: auto;
			height: 70px;
			/*display: inline-block;*/
		}
		.item_info{
			display: inline-block;
		}
		div.img{
			display: inline-block;
		}
		/*.image1{
			width: 
		}*/
		/*.display1{
			display: inline-block;
		}*/
	</style>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<script type="text/javascript">
		var getCookieValue = (name) => (
  			document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '');
		// $(document).ready(function(){
		// 	if(getCookieValue('none_user') != '') 	alert(getCookieValue('none_user')); 
		// });
		document.addEventListener("DOMContentLoaded", function(event) { 
  			if(getCookieValue('none_user') != '') 	alert(getCookieValue('none_user')); 
		});
	</script>
</head>
<body>
	<?php include "header.php" ?>
	<div>
		<?php include "filter.php" ?>
		<div id="saveReport" style="background-color: lightgreen;"></div>
		<div id="listhouse">
			<div >
				<div class="display1">
					<div id="list"></div>
					<div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
</body>
<script type="text/javascript">
		var getCookieValue = (name) => (
  			document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '')
		document.getElementById("saveReport").innerHTML = getCookieValue('saveReport');
	</script>
</html>	