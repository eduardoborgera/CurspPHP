<?php require "commom.php" ?>

<html>
	<head>
		<title>pagina1</title>
	</head>
	<body>
		<?php 

			function soma_teste($a, $b, $resultado){

				echo "a=$a, b=$b, resultado=$resultado<br/>";
				return $resultado == soma($a, $b);
			}

			if (soma_teste(1,2,3)) {
				
				echo "Teste OK";
			} else {

				echo "Teste Fail";
			}

		?>
	</body>
</html>