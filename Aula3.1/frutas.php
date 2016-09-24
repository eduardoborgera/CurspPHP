<html>
	<head>
		<title>Frutas</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<h1>Frutas</h1>

		<ul class="list-group">
			<?php require "negocio.php"; ?>
			<?php foreach ($frutas as $chave => $valor): ?>

				<li>(<?= $chave ?>) => <?= $valor ?></li>
			<?php endforeach ?>	
		</ul>
		<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
	
</html>