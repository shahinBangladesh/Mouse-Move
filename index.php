<!DOCTYPE html>
<html>
	<head>
		<title>Mouse Parallax Demo</title>
		<script src="min/jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="min/jquery.mouseparallax.min.js" type="text/javascript"></script>

		<style type="text/css">
			.mizan{
				width:80%;
				margin: 0 auto;
				height:500px;
				font-size:100px;
				background:gray;
			}
		</style>
	</head>
	<body>
		<div class="mizan">
			<div class="content">
				<?php 
				for($a=0;$a<100;$a++){
					echo "Md. Jubair Mizan<br>";
				}
				?>
				
			</div>
			<span id="result"></span>
			<script type="text/javascript">
				$('.mizan').mouseParallax({
					direction:'xy'
				});
			</script>
		</div>
	</body>
</html>