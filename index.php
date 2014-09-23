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

	<h2>Andmetüübi funktsioonid</h2>

	<?php 
	$float = 3.14;
	$integer = 3;
	echo "Kas {$integer} on integer? " . is_int($integer);
	echo "<br>";
	echo "Kas {$float} on integer? " . is_int($float);
	echo "<br>";
	echo "Kas {$integer} on float? " . is_float($integer);
	echo "<br>";
	echo "Kas {$float} on float? " . is_float($float);
	echo "<br>";
	echo "Kas {$integer} on numeric? " . is_numeric($integer);
	echo "<br>";
	echo "Kas {$float} on numeric? " . is_numeric($float);
	echo "<br>";
	 ?><br>

</body>
</html>