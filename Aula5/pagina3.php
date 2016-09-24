<?php 
	
	if (isset($_GET['id'])) {
		
		echo "Voce esta acessando a pagina:  " . $_GET['id'];
	}
	
	$paginas = array(1,2,3,4,5,6,);

?>

<html>
	<head>
		<title>Paginacao Metodo :: GET</title>
		<?php require "../Aula5/bootstrap.php";?>
	</head>
	<body>

		<?php  foreach ($paginas as $pagina => $value):?>
			<a href="pagina3.php?id=<?= $pagina ?>">
			<?= $pagina ?>
		<?php endforeach?>	

	</body>	
	
</html>