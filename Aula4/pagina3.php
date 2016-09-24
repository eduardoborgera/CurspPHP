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

					$skils_a = array("PHP","Test Driver Development","Scrun");
					$skils_b = "PHP ,Test Driver Development ,Scrun";

					echo "<h2>implode(glue, pieces)</h2>";
					$value = implode($skils_a, ',')	;
					var_dump($value);
					echo"<hr>";

					echo "<h2>explode(delimitador, string)</h2>";
					$value2 = explode(',', $skils_b);
					var_dump($value2);
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