<html>
	<head>
		<title>Funcoes</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<h1>Funcoes nativas</h1>

		<ul >
			
			<?php $string  = "Seu nome"; ?>
				
			<?php

				echo "Funcao nativa, responsavel por manter a caixa alta";
				echo "<li><strong>echo strtoupper($string)</strong></li>";
 				echo strtoupper($string);
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por manter a caixa baixa";
 				echo "<li><strong>echo strtolower($string)</strong></li>";
 				echo strtolower($string);
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por manter a primeria letra e caixa alta";
 				echo "<li><strong>echo ucfirst($string)</strong></li>";
 				echo ucfirst($string);
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por manter a primeria letra e caixa baixa";
 				echo "<li><strong>echo ucwords($string)</strong></li>";
 				echo ucwords($string);
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por retornar a qnd de caracter na string";
 				echo "<li><strong>echo strlen($string)</strong></li>";
 				echo strlen($string);
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por retornar a qnd de caracter na string";
 				echo "<li><strong>echo str_replace</strong></li>";
 				echo str_replace("Oi", "Tchau", "Oi mundo");
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por retornar a qnd de caracter na string";
 				echo "<li><strong>echo str_repeat</strong></li>";
 				echo str_repeat("#", 10);
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por retornar a qnd de caracter na string";
 				echo "<li><strong>echo substr</strong></li>";
 				echo "Substr:  " . substr("ABCDEFGHIJ", 3,6);
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por retornar a qnd de caracter na string";
 				echo "<li><strong>echo strpos</strong></li>";
 				echo strpos("0123456789", '7') . "<br/>";
 				echo strpos("0123456789", '9') . "<br/>";
 				echo strpos("0123456789", 'A') . "<br/>";
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por retornar a qnd de caracter na string";
 				echo "<li><strong>echo strstr</strong></li>";
 				echo strstr("meu.nome@gmail.com", '@');
 				echo"<hr/>";

 				echo "Funcao nativa, responsavel por retornar a qnd de caracter na string";
 				echo "<li><strong>echo strstr</strong></li>";
 				$s = '    SEJA BEM VINDO     ';
 				var_dump($s);
 				echo var_dump(trim($s));
 				echo"<hr/>";


			 ?>	
		</ul>
		<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
	
</html>