<?php
	
	$user = array(

		"email" => "admin@localhost.com",
		"senha" => "123456",
		"name" =>  "Eduardo Borges"
	);

	//campos obrigatorios
	$requireds = array('email', 'senha');

	//Preciso saber se o que vem e um POST
	if($_SERVER['REQUEST_METHOD']=='POST'){

		// Valida os campos do $_POST
		foreach ($requireds as $e) {

			//valisa se o campo foi definido no html
			if (!array_key_exists($e, $_POST)) {
				
				header('Location:  pagina5.php?error=missing_field');
			}
			//VALIDA SE O CAMPO ESTA VAZIO
			if (empty($_POST[$e])) {
				
				header('Location:  pagina5.php?error=missing_field');
			}
		}

		//Atribuicao das variaveis de login e senha
		$login = $_POST['email'];
		$senha = $_POST['senha'];

		//Comparar logins e senha do usuario
		if ($login == $user['email'] && $senha == $user['senha']) {

			//iniciando a sessao
			if (!isset($_SESSION)) session_start();

			$_SESSION['email'] = $login;
			$_SESSION['senha'] = $senha;
			$_SESSION['nome'] = $user['name'];

			
			header('Location: index.php');
				
		}
		else{

			header('Location:  pagina5.php?error=invalid_login');
	}
	}

	else{

		header('Location: pagina5.php');
	}