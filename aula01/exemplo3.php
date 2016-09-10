<?php

	// entrada de dados via terminal 
	echo "Opcao";
	$opt = readline();

	switch($opt){

		case 1:
			echo "Cadatrar usuario... \n";
		case 2:
			echo "Deletar usuarios... \n";

		case 3:
			echo "Listar usuarios... \n";

		break;		

		default;
			echo "Opcao invalida !! \n";

	}