<?php


      session_start();
        if(!isset($_SESSION['usersession']) AND !isset($_SESSION['passwordsession'])){
                
                header("Location: ../index.php");
                exit;
        
        } 

?>

<html>
        <head>
                <title>Material/módulo1- CCBb</title>
                <link rel="stylesheet" type="text/css" href="estilo.css">
                <meta charset="utf-8">
        </head>
        <body bgcolor="">
              <form method="POST" action="../arquivos/materialcode.php">
                      <table border="1" cellspacing="0" cellpadding="0">
                      <tr>
                      <td>
                     <div class="modul1align">
                     
                     <ul>
                      <li><input type="submit" name="0001" id="0001" value="Aula 2" style="background: blue;"></li><br>
                      
                      <form method="POST" action="../arquivos/materialcode.php">
                      <li><input type="submit" name="0002" id="0002" value="Aula 3" style="background: blue;"></li>
                     
                      </form>
                     
                     </div>
                     </td>
                     </tr>
                     </table>
               
              </form>
        </body>
</html>