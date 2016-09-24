<?php 
	if ($_SERVER['REQUEST_METHOD']== 'POST') {
		
		if (!isset($_POST['to']) || !empty($_POST)) {
			
			echo "<script>alert('Por favor viado, informe o campo to, e obrigatorio ta cego?')</script>";
		}

		if (!isset($_POST['body']) || !empty($_POST['body'])) {
			
			echo "<script>alert('Por favor viado, informe o campo to, e obrigatorio ta cego?')</script>";
	}

	if (mail($_POST['to'], 'TESTE', $_POST['body'])) {
		
		echo"<div class='alert alert-success'>";
			echo "E-mail enviado com suesso";
		echo"</div>";	
	}
}
?>

<html>
	<head>
		<title>Metodo :: POST</title>
		<?php require "../Aula5/bootstrap.php";?>
	</head>
	<body>
			<div class = "container">				
				<div class="container-fluid">
					<h1>Formulario</h1>
					<form class="form-horizontal" method="POST" action="pagina4.php">
					  <div class="form-group">
					  	<label>*</label>
					    <label for="imputNome" class="col-sm-2 control-label">To</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="imputNome" name= "to" placeholder="To">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="imputNome" class="col-sm-2 control-label">E-mail</label>
					    <div class="col-sm-10">
					      <textarea name="body" class="form-control" placeholder="Seu e-mail aqui karai"></textarea>
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