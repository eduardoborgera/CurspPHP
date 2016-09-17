<?php 

	//Arquivo commom.php

	function soma($a, $b){

		return $a + $b;
	}

	// Funcao que receba uma funcao anonima com valor N
	// calcula o tempo que a funcao demora para executar
	//Dica tempo_inicial = 0;
	//$func($n);
	//tempo_final = 1;
	//return tempo_final - tempo_inicial;

	function my_filter($lista, $func){

		$nova_lista = array();
			foreach ($lista as $elemento) {
				
				if($func($elemento) == true)
					$nova_lista[] = $elemento;
			}
		return $nova_lista;
	}