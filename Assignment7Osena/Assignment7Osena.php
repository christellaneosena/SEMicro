<!DOCTYPE html>

<html>
<head>
	<title>Assignment 7 - Osena</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<div id="wrapper">
<h1 align="center">Chakraborty Bar & Grill</h1>
<p align="center" style="font-size: 15px;">55 Lexington Ave <br> New York, NY</p>
<p>04/17/2021 11:59PM</p>
<p>AMEX HOST CHRISTELLANE</p>
<table style="width:100%">
  <tr>
    <td>QTY</td>
		<td>DESC</td>
		<td>AMT</td>
  </tr>
</table>
<hr>
<table style="width:100%">
  <tr>
    <td>1</td>
		<td>Penne Alla Vodka w/ Chicken</td>
		<td>$15.95</td>
  </tr>
	<tr>
    <td>1</td>
		<td>Baby Back Ribs Deluxe</td>
		<td>$20.00</td>
  </tr>
	<tr>
		<td>1</td>
		<td>Vodka Martini</td>
		<td>$9.00</td>
	</tr>
	<tr>
		<td>1</td>
		<td>Tiramisu</td>
		<td>$8.50</td>
	</tr>
</table><br>
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
