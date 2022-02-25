<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logadmin/systemadmin/adminsystem.php';
	Acessopublico();
	
	

?>
<?php Validarcadastro(); ?>
<!doctype html>
<html lang="PT_BR">
	<head>
		<title>Cadastro admin</title>
		<meta charset="utf-8">
	</head>
	<body>
	<div style="background: lightblue;">
		
		<form method="POST" action="">
			Nome: <input type="text" name="nome"><br></br>
			Email: <input type="text" name="email"><br></br>
			Usuario: <input type="text" name="usuario"><br></br>
			Senha: <input type="password" name="senha"><br></br>
			Confirmar senha: <input type="password" name="confirmar"><br></br>
			<input type="submit" name="admin" value="cadastrar">
		</form>
	</div>
	</body>
</html>