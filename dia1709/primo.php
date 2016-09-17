<?php

	/**
	* Funcao para calcular os valores primos
	* ate o uktimo valor que sera passado por parametro na funcao
	*/
	function calculandoPrimos($ultimo_valor){

		for ($i= 2; $i <= $ultimo_valor; $i++) { 


			$counter = 0;


			for ($j= 1; $j <= $i ; $j++) { 

				if ($i % $j ==0 ) {
					 $counter += 1;
				}
			}
			
		}
	}

	$x = readline("Entre com o ultimo valor : ");
	calculandoPrimos($x);