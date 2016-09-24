<html>
	<head>
		<title>Formulario</title>
		<?php require "../Aula5/bootstrap.php" ;?>
	</head>
	<body>
			<div class = "container">				
				<div class="container-fluid">
					<h1>Formulario</h1>
					<form class="form-horizontal">
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label">Teste</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 control-label">teste2</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="inputPassword3" placeholder="Senha">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox"> Manter conectado
					        </label>
					      </div>
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