<html>
<header>
	<style>
	#nome{
		font-size: 20px;
		font-weight: bold;
		font-family: arial, helvetica, sans-serif;
	}
	</style>
</header>


<?php	
	// Tipos de dados no PHP

	// Simples
	// Compostos
	// Especiais

	// Simples - Inteiro, ponto flutuante, String e lógico
	echo "<h1>Tipos de Dados com PHP</h1>";

	echo "<h2>Valores Inteiros:</h2> ";

	$inteiro1 = 19;
	$inteiro2 = -371;
	$inteiro3 = 0xAF; // Hexadecimal
	var_dump($inteiro3); // Usado para retornar o tipo da varivel e seu valor
	echo "<br>";
	var_dump($inteiro1);
	echo "<br>";
	var_dump($inteiro2);

	echo "<h2>Valores de Ponto Flutuante</h2>";

	$float1 = 24.56;
	$float2 = 6.02e23;
	$float3 = 1.8E-18;
	print("Número 1: $float1 <br> Número: 2 $float2 <br> Número 3: $float3");

	echo "<h2> Valores Booleanos </h2>";

	$falso = false;
	$verdade = true;

	if($verdade == true){
		echo "Valor Verdadeiro<br>";
	}

	if($falso == true){
		echo "Valor verdadeiro<br>";
	}else{
		echo "Valor Falso<br>";
	}

	echo "<h2> Valores do tipo String </h2>";
	print("<p>É recomendável usar aspas duplas com esses valores.</p>");

	$nome = "Daniel";
	$sobrenome = " Zornek"; // Se tiver espaço ele considera umc caracter também do mesmo jeito

	echo "Meu nome é $nome $sobrenome <br>";
	echo 'Meu nome é $nome $sobrenome <br>';

	echo "<h3>Teste meu</h3>";

	for($i = 0; $i < strlen($nome); $i++){
		echo "<p id='nome'>$nome[$i]<br></p>";
	}
	
?>
</html>