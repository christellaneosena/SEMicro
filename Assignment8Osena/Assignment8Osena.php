<!DOCTYPE html>

<html>
<head>
	<title>Assignment 8 - Osena</title>
</head>

<body>
<h1 align="center">Arrays</h1>
<center>

<?php
	$month[January, February, March, April, May, June, July, August,
	September, October, Novemnber, December];

	foreach($months as $m){
		if(gettype($m) == "array"){
			foreach($m as $nested)
			echo "<option value='month'>$m</option>";
		}
	}else{
		echo"<option value='month'>$m</option>";
	}
	}

	echo "<label for='month'>Select a month:</label>";

	echo"<select name='month' id='month'>
	  <option value='month'>$m</option> 
	  </select>"

	echo "</option>"

?>
</center>

<hr>

<h1 align="center">Classes / Objects</h1>

<center>

<?php
	$item1 = 15.95;
	$item2 = 20.00;
	$item3 = 9.00;
	$item4 = 8.50;
	$subtotal = item1 + item2+ item3 + item4;
	$tax = 8.875;
	$tip = 0.20 * subtotal;
	$final = tip + tax;

	echo "<h1>AMT" $final "</h1>";
	echo "<p>SUB-TOTAL" $subtotal "</p>";
	echo "<p>TAX" $tax "</p>";

?>
</center>

</div>
</body>
</html>
