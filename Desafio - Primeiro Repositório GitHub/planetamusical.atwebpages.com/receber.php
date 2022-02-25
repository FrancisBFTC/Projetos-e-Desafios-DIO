

<html>
	<head>
		<title>envio - planeta musical</title>
                <link rel="shortcun icon" href="favicon/favicon.ico">
                <link rel="stylesheet" type="text/css" href="custom.css">
                <meta charset="utf-8">
	</head>
	<body>
        
        <font color="red">
		
	<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	$erro = "Ocorreu um erro";
	$status = false;
        
        
	
	if ($nome == ""){
		echo $erro .= (" <br>Preencha o campo nome\n <br>");
		$status = true;
	}
	
	if ($email == ""){
		echo $erro .= (" <br>Preencha o campo email\n <br>");
		$status = true;
	}
	
	if (substr_count ($email, "@") != 1){
		echo $erro .= (" <br>email inválido!\n");
		$status = true;
	
	}
	
	if (substr_count ($email, ".") > 2){
		echo $erro .= (" <br>email inválido!\n");
		$status = true;
	
	}
	
	if ($status == false){
		mail ("casaculturalsibemol@hotmail.com", "Email enviado de $nome",  $mensagem,
                
                "este email foi enviado por $nome, aqui estao os seguintes dados:
                
                Nome: $nome
                Email: $email
                --
                Mensagem: $mensagem
                
                
                ");
		echo ("Email enviado com sucesso! Em breve responderemos sua mensagem, obrigado!");
                
	}
	
	
	
	else{
		echo ($erro);
	}
	
	
	

	
?>
</font><br>
<br />

<a href="enviar.php">Voltar</a>
	
	</body>
</html>	
	