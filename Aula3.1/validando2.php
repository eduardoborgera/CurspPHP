<?php

	/**
	* Funcao para calcular os valores primos
	* ate o uktimo valor que sera passado por parametro na funcao
	*/
	function calculandoPrimos($ultimo_valor){

		for ($i= 2; $i <= $ultimo_valor; $i++) { 

			//echo "Valor: $i \n";

			$counter = 0;

			//echo "Validando:";	

			for ($j= 1; $j <= $i ; $j++) { 

				//echo "$j";

				if ($i % $j ==0 ) {
					 $counter += 1;
				}
			}
			//if ($counter == 2) {

				//echo "\n";
				//echo "Primo: " .$i;
			//}
			//echo "\n";
		}
	}

	$x = readline("Entre com o ultimo valor : ");
	calculandoPrimos($x);