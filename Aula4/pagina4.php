<html>
	<head>
		<title>Funcoes Arrays</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<h1>Funcoes nativas Arrays</h1>

		<div class="container-fluid">
			<ul >
				
				<!-- <?php $string  = "Seu nome"; ?> -->
					
				<?php

					$nome = "borges";
					$senha = "123456";
					$s =  "INSERT (nome, senha) VALUES (%s, %s)";
					$query = sprintf($s, $nome, $senha);
					echo $query;
					echo"<hr>";					
				 ?>	
			</ul>
		</div>
		<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
	
</html>