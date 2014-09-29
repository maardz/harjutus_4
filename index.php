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

	<h2>Jadad (array)</h2>

	<?php
	    $numbers = array(4,8,15,16,23,42);
	    echo $numbers[0];
	    echo "<br>";
	    echo $numbers[1];
	    echo "<br>";
	    echo $numbers[2];
	    echo "<br>";
	    echo $numbers[3];
	    echo "<br>";
	    echo $numbers[4];
	    echo "<br>";
	    echo $numbers[5];
	    echo "<br>";

	     $mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));
	    echo $mixed[1];
	    echo "<br>";
	    echo $mixed[4][2];
	    echo "<br>";
	    $mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));
	    $mixed[2] = "kass";
	    $mixed[5] = "kass";
	    $mixed[] = "hobune";
	    echo '<pre>',print_r($mixed),'</pre>';
	    
	?>

	<h2>Associative arrays</h2>

	<?php 
	$assoc = array("first_name" => "Marge", "last_name" => "Mölder");
	echo $assoc["first_name"];
	echo "<br>";
	echo $assoc["last_name"];
	echo "<br>";

	$assoc = array("first_name" => "Marge", "last_name" => "Mölder", "e_mail" => "marge.molder@khk.ee");
	echo "Minu nimi on" . " ". $assoc["first_name"]. " ".$assoc["last_name"]. ".". " ". "Minu email on". " ".$assoc["e_mail"] ;
	echo "<br>";
	
	?>

</body>
</html>