<!DOCTYPE html>
<html>
<head>
	<title>2ª demonstração de PHP</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<style type="text/css">
		.line {
			font-weight: bold;
			color: green;
			padding-left: 10px;
			line-height: 50px;
		}
	</style>
</head>
<body>
	<?php
		for($i = 0; $i < 10; $i++){
			print("<span class=\"line\">Numero : " . $i . "</span><br />");
		}
	?>

	<script type="text/javascript">
		$(document).ready(function(){
			alert("Yaahooo!");
		});
	</script>
</body>
</html>