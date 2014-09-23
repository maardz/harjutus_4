<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h2>Arvutamine murd- ja täisarvudega</h2>

	<?php echo $float = 3.14; 
		echo "<br>";
		echo $float + 7;
		echo "<br>";
		echo 4/3;

	?><br>

	<h2>Murdarvude ümardamine</h2>
	<?php
		$float = 3.14; 
		echo round($float);
		echo "<br>";
		echo ceil($float);
		echo "<br>";
		echo floor($float);
		

	?><br>

</body>
</html>