<?php
	$dsn = "mysql:host=fdb15.eohost.com;dbname=2163708_admin;charset=utf8";
	$usuario = "";
	$senha = "";
	
	try{
		
		$PDO = new PDO($dsn, $usuario, $senha);
               

	}catch(PDOException $erro){
		
	}
	

?>
