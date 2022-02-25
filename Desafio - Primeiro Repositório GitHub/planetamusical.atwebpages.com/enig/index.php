<?php
        $server = $_SERVER['REMOTE_ADDR'];

	$name = 'file.log';
	$file = fopen($name, 'a');
	fwrite($file, $server."\r\n");
	fclose($file);

?>

<html>
        <head>
                <title>Link temporário</title>
        </head>
        <body>
                <p>Guarde essa chave: Lucerna XI Novum<br>
                Esse é o nosso código secreto para fins necessários!<br>
                Se voçê chegou até aqui, escreva na sua mesa essa chave,<br>
                Eu vou ver e apagar.</p>
        </body>
        
</html>