<html>
        <head>
                <title>Envio - planeta musical</title>
                <link rel="stylesheet" type="text/css" href="custom.css">
                <link rel="shortcun icon" href="favicon/favicon.ico">
                <meta charset="utf-8">
        </head>
        
        <body bgcolor="#9B9BF9">

           <div id="form">
                <form action="receber.php" method="post">
                  <p>Nome: 
                    <input name="nome" type="text">
                  </p>
                  <p>Email: 
                    <input name="email" type="text">
                  </p>
                  <p> Mensagem: <br>
                    <textarea name="mensagem" wrap="VIRTUAL" rows="10" maxlength="400"></textarea>
                  </p>
                  <p>
                    <input type="submit" name="Submit" value="Enviar">
                  </p>
                </form>
                <a href="index.php"><font color="blue">Voltar</font></a>
            </div>

        </body>
        
</html>