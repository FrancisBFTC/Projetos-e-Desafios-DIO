<?php
	$dsn = "mysql:host=fdb15.eohost.com;dbname=2163708_admin;charset=utf8";
	$usuario = "2163708_admin";
	$senha = "1324354657687980Site*";
	
	try{
		
		$PDO = new PDO($dsn, $usuario, $senha);
               

	}catch(PDOException $erro){
		
	}
	

?>