
                      
<html>
        <head>
                <title>Material/módulo1- CCBb</title>
                <link rel="stylesheet" type="text/css" href="../assuntos/estilo.css">
                <meta charset="utf-8">
        </head>
        <body bgcolor="lightgray">
             <div class="modul1align"> 
              <form method="POST" action="../arquivos/Guitarcourses/0001.php">
                 <div class="code">
                          <b>Código de identificação:</b>
                          <font color="red"><?php  echo $_GET['error']; ?></font>
                          <font color="red"><?php echo $_GET['error1']; ?></font>
                          <p align="center"><input type="text" size="6px" name="code"></p><br><br />
                          <input type="submit" name="submit" value="entrar" style="background: gray;margin:-40px 60;"> 
                  </div>
                     
                  
              </form>
               
            </div>
        </body>
</html>