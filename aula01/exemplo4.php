<?php 
	
	//declaraco vairavel
	$num = 0;
	//Lacos de repeticao
    while(($num += 10) <= 99){

    	echo "\rApagando os arquivos: $num";
    	sleep(1);
    	//$num += 10;
    }

    echo ":)";