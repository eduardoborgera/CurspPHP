<?php

	$a = 10;
	$b = 10;
	$p = 3.7;

	$resultado = $a + $b;

	//TODO: Pegar o resuldado e diminuir com valor $p

	 $resultado =  ($resultado - $p);

	 // ou
	 $resultado -= $p;
	 $resultado += $p;
	 $resultado *= $p;
	 $resultado /= $p;

	echo $resultado. "\n";

	$nome_completo = "Eduardo";
	$sobrenome = "Borges";

	$nome_completo = $nome_completo.$sobrenome;
	$nome_completo .= $sobrenome;

	echo $nome_completo. "\n";