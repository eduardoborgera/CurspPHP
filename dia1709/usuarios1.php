<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">   
    
    <title></title>  
    <?php require "bootstrap.php";?>  
    <!-- 
      
      for($i = 0; $n = count ($users); $i < $n; $i++){
          
          $user = $users[$i];
          echo $users ['name'];
      }
    
  -->

  </head>
  <body>
    <table class="table">
      <thead><th>Nome</th><th>Login</th><th>Acoes</th></thead>
      <tbody>
        <?php require "array/formularios.php" ?>
        <?php  foreach ($users as $u): ?>
        <tr>
          <td><?= $u['name'] ?></td>
          <td><?= $u['login'] ?></td>  
          <td>
            <button type="button" class="btn btn-primary">Botão</button>
            <button type="button" class="btn btn-danger">Botão</button>
          </td>        
        </tr>
        
      <?php endforeach ?>
      </tbody>
  </table>   
  </body>
</html>