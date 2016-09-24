<?php 
    

    function fatorial($x){       

        $resulta = 1;
        for ($i= 1; $i <= $x; $i++){ 
                
                $resulta = $resultado * $i;
               
            }

            return $resulta;
        }       

    if(isset($_GET['value'])){

        $resultado = fatorial($_GET['value']);
    }

?>
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
                <form action"pagina6.php" method="GET">
                    <input type="text" name="value"/>
                     <input type="submit" name="Calcular"/>
                </form>
            </div>
        </div>
        <div>
            Resposta: 
            <?php if ($resultado !=  null):?>
                <?= $resultado ?>
            <?php endif ?>    
        </div>
    </body>

</htmL>