<?php


	function _merge($chaves, $valores){

		$resultado = array();

		for($i = 0; $i < count($chaves); $i++){

		$valor1 = $chaves[$i];
		$valor2 = $valores[$i];

		$resultado[$valor1] = $valor2;
		
	}

	return $resultado;

	}

	$c= array ('rafael', 'lucas', 'joao', 'viviane');
	$v= array ('banana', 'maca', 'pera', 'uva');

	$frutas = _merge($c,$v);