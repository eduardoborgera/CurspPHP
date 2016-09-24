<html>

    <head>
        <title></title>
        <?php require"../Aula5/bootstrap.php";?>
        <link rel="stylesheet" type="text/css" href="static/pagina5.css">
        <script type="text/javascript" src="static/pagina5.js"></script>
    </head>
    <body>       
        <div class="container">
            <div class="card card-container">                
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <?php if (isset($_GET['error'])):?>
                    <div class="alert alert-danger">
                        <?php if($_GET['error'] == 'invalid_login'):?>
                            eLogin ou senha invalida
                        <?php endif ?>
                        <?php if($_GET['error'] == 'missing_field'):?>
                            Campos Obrigatorios
                        <?php endif ?>
                    </div>
                <?php endif ?>    
                <form class="form-signin" action="login.php" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="email" class="form-control" placeholder="E-mail" name="email"  autofocus>
                    <input type="password" id="senha" class="form-control" placeholder="Senha" name="senha" >
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Mantenha-me logado
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" data-toggle="tooltip" data-placement="bottom" title="Logar" type="submit">Acessar</button>
                </form>
                <a href="#" class="forgot-password">
                   Esqueseu sua senha?
                </a>
            </div>
        </div>
    </body>

</htmL>