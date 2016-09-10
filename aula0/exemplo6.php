<?php 

	$a = "7" == 7;  //IGUAL - verifica apenas o valor na memoria
	$b = 7 != 7; // DIFERENTE OU <>
	$c = "7" === 7; //IDENTICO verifica o valor na memoria e tmbm seu tipo
	$d = 7 !== 7; // NAO IDENTICO
	$e = 7 > 8; // MAIOR QUE
	$f = 7 < 8; // MENOR QUE
	$g = 7 <= 7; //MENOR OU IGUAL
	$h = 7 >= 8; //MAOR OU IGUAL

	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
	var_dump($e);
	var_dump($f);
	var_dump($g);
	var_dump($h);