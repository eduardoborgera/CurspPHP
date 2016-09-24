<?php 
	
	//Verifica se a variavel e nula

	if (isset($_GET['userneme'])) {
		
		echo "Seja bem vindo, " . $_GET['userneme'];
	}else{

		echo "<div class='alert alert-danger'>";
			echo "Por favor preencher o formulario";
		echo "</div>";
	}
	

?>

<html>
	<head>
		<title>Metodo :: GET</title>
		<?php require "../Aula5/bootstrap.php";?>
	</head>
	<body>
			<div class = "container">				
				<div class="container-fluid">
					<h1>Formulario</h1>
					<form class="form-horizontal" method="GET" action="pagina1.php">
					  <div class="form-group">
					    <label for="imputNome" class="col-sm-2 control-label">Nome</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="imputNome" name= "userneme" placeholder="Nome">
					    </div>
					  </div>					  
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-primary glyphicon glyphicon-user">Conectar</button>
					      <button type="submit" class="btn btn-danger glyphicon glyphicon-refresh">Limpar</button>
					    </div>
					  </div>
					</form>
				</div>
			</div>	
	
</html>