<?php
	
	//Entrada de dados no Windows (fgets)
	//Entrada de dados lunux ( readline) --- 
	$x = readline("Entre com o ultimo valor : ");
	calculandoPrimos($x);

	/**
	* Funcao para calcular os valores primos
	* ate o uktimo valor que sera passado por parametro na funcao
	*/
	function calculandoPrimos($ultimo_valor){

		for ($i= 2; $i <= $ultimo_valor; $i++) { 
			
			if (e_primo($i)) {
				
				echo "Primo: " .$i;
			}
		}
	}

	function e_primo($recebe_primo){

		if($recebe_primo % 2 == 0 && $recebe_primo != 2)

		return false;

		$counter = 0;
		for ($j= 1; $j <= $recebe_primo ; $j++) { 

			if ($recebe_primo % $j ==0 ) {
				 $counter += 1;
			}

			if ($counter > 2) {
				
				return false;
			}
		}

		return $counter == 2;
	}

	
