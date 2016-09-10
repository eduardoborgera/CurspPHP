<?php

	/**
	* Operadores logicos
	*/

	// declaracoes de variaveis
	$a = 2;
	$b = 4;
	$soma = $a + $b;
	$subtracao = $b - $a;
	$multiplicacao = $a * $b;
	$divisao = $a / $b;
	$mod = $a % $b;

	echo "variavel $a + $b = " . $soma. "\n";
	echo "variavel $a - $b = " . $subtracao. "\n";
	echo "variavel $a * $b = " . $multiplicacao. "\n";
	echo "variavel $a / $b = " . $divisao. "\n";

	if($mod == 0){

		echo "Resultado mod e par = " .$mod ."\n";
	}else{
		echo "Resultado impar = " . $mod . "\n";

	}
