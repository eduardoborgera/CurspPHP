<?php

	// Arquivos: primos.php

	# Aprendendo funcoes usando numeros primos
	// declaracoa de uma funcao funcition<nome> (param1, param2){// codigo}

function primos($max){

	$resultado = 0;
	for($i = 0; $i < $max; $i++){
		//$a = $b + 1;
		$resultado = $i + 1;
	}

	return $resultado;
}
	$entrada_do = readline();
	$a = primos($entrada_do);