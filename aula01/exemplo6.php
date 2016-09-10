<?php 

	for($i = 0; $i <= 20; $i++){

		echo "Contador: $i\n";
	}

	echo "\n===================== FOR 1 ===================\n";

	for($i = 20; $i >= 0; $i--){

		echo "Contador: $i\n";
	}

	echo "\n===================== FOR 1 ===================\n";


	// FOR DE ELEMENTOS 
	$times = ["Sao Paulo","Santos","Palmeiras","Corinthians"];

		foreach ($times as $cadaTime => $posicao) {
			 
			 echo "{$cadaTime} . {$posicao} \n";
		}
	echo "\n===================== FOR 1 ===================\n";	

	for($i = 0; $i <= 3; $i++){

		$string = printf("%d | %s", ($i+1), $times[$i]);
		echo "$string\n";
	}
	echo "\n===================== FOR 1 ===================\n";	

	echo "\n===================== FOR 1 ===================\n";	

	for($i = 0; $i < count($times); $i++){

		$string = printf("%d | %s", ($i+1), $times[$i]);
		echo "$string\n";
	}
	echo "\n===================== FOR 1 ===================\n";	


	$string1 = "varios nomes";

		for($i = 0; $i < strlen($string1); $i++){
			echo $string1[$i] . "\n";
		}


	// Outros exemplos

	echo "\n===================== FOR 1 ===================\n";

		for($i = 0; $i < 20; $i++){

			if($i == 3){
				 continue;
			}

			echo "Contador: $i\n";

		}

	echo "\n===================== FOR 1 ===================\n";

		for($i = 0; $i < 20; $i++){

			if($i == 3){
				 break;
			}

			echo "Contador: $i\n";

		}	

		echo "\n===================== FOR 1 ===================\n";


		for($i = 1; $i < 100; $i++){

			if(($i % 2) == 0){
				 continue;
			}

			echo "Contador: $i\n";

		}