<style type="text/css">
	h1{
		font-size: 35px;
	}

	*{
		font-size: 26px;
	}
</style>

<?php
	echo "<h1>Operadores Aritméticos e de atribuição</h1>";

	$x = 10; // atribui o valor 10 à variável x 
	$x += 5; // equivale a $x = $x + 5
	echo "$x <br>"; 
	$x /= 2; // equivale a $x = $x / 2
	echo $x;

	echo "<h2> Operadores Aritméticos</h2>";

	$x1 = 30;
	$y = $x1 * 3;
	$z = $y % $x1;
	echo "$x1 <br>";
	echo "$y <br>";
	echo "$z <br>";
	$k = $z++;
	echo "$k <br>";
	$k = $z;
	echo $k;
?>