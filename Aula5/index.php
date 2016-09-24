<html>

    <head>
        <title></title>
        <?php require"../Aula5/bootstrap.php";?>
        <?php if (!isset($_SESSION)) session_start();

              if (!isset($_SESSION['email'])) {
                  
                  header('Location:  pagina5.php');
               } 
        ?>
        <link rel="stylesheet" type="text/css" href="static/pagina5.css">
        <script type="text/javascript" src="static/pagina5.js"></script>
    </head>
    <body>       
        <div class="container">
            <div class="card card-container">
                
                <h1>Meu site</h1>
                <p>Logado: <?= $_SESSION['email'] ?></p>
                <p>Senha: <?= $_SESSION['senha'] ?></p>
                <button class="btn btn-lg btn-primary btn-block btn-signin" data-toggle="tooltip" data-placement="bottom" 
                title="Logar" type="submit" action="logout.php">Acessar</button>
                <a href ="logout.php">Sair</a>
                
            </div><!-- /card-container -->
        </div><!-- /container -->        
    </body>

</htmL>