<?php

	//recupera/pega as informações do usuário
	function Pegarusuario($chave = null){
		if(!Estalogado())
			return false;
		else{
			$chaveusuario = Usuariologado();
			$query = "SELECT * FROM professores WHERE chaveusuario = '$chaveusuario' AND status = true LIMIT 1";
			$resultado = mysql_query($query) or die(mysql_error());
			$dados = mysql_fetch_array($resultado);
			
			if($chave == null)
				return $dados;
			else
				return(isset($dados[$chave])) ? $dados[$chave] : false;
			
		}
	}
	
	//recupera/pega as informações do usuário
	function Pegarusuario1($chave = null){
		if(!Estalogado1())
			return false;
		else{
			$chavef = Usuariologado1();
			$query = "SELECT * FROM matricula WHERE chavef = '$chavef' AND status = true LIMIT 1";
			$resultado = mysql_query($query) or die(mysql_error());
			$dados = mysql_fetch_array($resultado);
			
			if($chave == null)
				return $dados;
			else
				return(isset($dados[$chave])) ? $dados[$chave] : false;
			
		}
	}
	
	//isto verifica o usuario logado
	function Ficarlogado(){
		$chaveusuario = Usuariologado();
		$query = "SELECT * FROM professores WHERE chaveusuario = '$chaveusuario' AND status = true";
		$resultado = mysql_query($query) or die(mysql_error());
		
		if(mysql_num_rows($resultado) <= 0)
			return false;
		else
			return true;
	}
	
	//isto verifica o usuario logado
	function Ficarlogado1(){
		$chavef = Usuariologado1();
		$query = "SELECT * FROM matricula WHERE chavef = '$chavef' AND status = true";
		$resultado = mysql_query($query) or die(mysql_error());
		
		if(mysql_num_rows($resultado) <= 0)
			return false;
		else
			return true;
	}
	
	//isto pega a chave
	function Pegarchave($usuario, $senha){
		$dadosusuario = Verificarusuario($usuario, $senha, true);
		return $dadosusuario;
	}
	
	//isto pega a chave
	function Pegarchave1($nomef){
		$dadosusuario1 = Verificarusuario1($nomef, true);
		return $dadosusuario1;
	}
	
	//Verificação para logar
	function Verificarusuario($usuario, $senha, $status = false){
		$senha	= Criptosenha($senha);
		$query		= "SELECT * FROM professores WHERE usuario = '$usuario' AND senha = '$senha'";
		$query		.= ($status) ? ' AND status = true' : '';
		$resultado		= mysql_query($query) or die (mysql_error());
		
		if(mysql_num_rows($resultado) <= 0)
			return false;
		else{
			$dados = mysql_fetch_assoc($resultado);
			return $dados['chaveusuario'];
		}
	}
	
	//Verificação para logar
	function Verificarusuario1($nomef, $status = false){
		
		$query		= "SELECT * FROM matricula WHERE nomef = '$nomef'";
		$query		.= ($status) ? ' AND status = true' : '';
		$resultado		= mysql_query($query) or die (mysql_error());
		
		if(mysql_num_rows($resultado) <= 0)
			return false;
		else{
			$dados = mysql_fetch_assoc($resultado);
			return $dados['chavef'];
		}
	}
	
	//Cadastrar o usuario admin
	function Registro($nome, $email, $usuario, $senha, $status = 1){
		$senha 	= Criptosenha($senha);
		$chaveusuario  	= Gerarchave();
		
		
		$register = date('d/m/Y');
		
	    
		$query 		= "INSERT INTO professores ( nome, email, usuario, senha, chaveusuario, register, status)";
		$query		.= "VALUES ('$nome', '$email', '$usuario', '$senha', '$chaveusuario', $register, $status)";
		
		return mysql_query($query) or die(mysql_error());
	}
	
	//Cadastrar o usuario admin
	function Cadastro($nomef, $emailf, $dataf, $idadef, $sexof, $cursof, $nomepaif, $nomemaef, $endereçof, $cidadef, $estadof, $fonef, $status = 1){
		
	
		
		$chavef  	= Gerarchave1();
		$dataregistro = date("d/m/Y");
		
	    
		$query 		= "INSERT INTO matricula ( nomef, emailf, dataf, idadef, sexof, cursof, nomepaif, nomemaef, endereçof, cidadef, estadof, fonef, chavef, dataregistro, status)";
		$query		.= "VALUES ('$nomef', '$emailf', '$dataf', '$idadef', '$sexof', '$cursof', '$nomepaif', '$nomemaef', '$endereçof', '$cidadef', '$estadof', '$fonef', '$chavef', $dataregistro, $status)";
		
		return mysql_query($query) or die(mysql_error());
	}

	//isto verica se o login existe
	function Usuarioexiste($usuario){
		$query = "SELECT usuario FROM professores WHERE usuario = '$usuario'";
		$resultado = mysql_query($query) or die(mysql_error());
	
	if(mysql_num_rows($resultado) <= 0)
		return true;
	else
		return false;
	}
	
	//isto verifica o nome do matriculado
	function nomeexiste1($nomef){
		$query = "SELECT nomef FROM matricula WHERE nomef = '$nomef'";
		$resultado = mysql_query($query) or die(mysql_error());
	
	if(mysql_num_rows($resultado) <= 0)
		return true;
	else
		return false;
	}
	
	//verificar se o email existe
	function Emailexiste($email){
	$query = "SELECT email FROM professores WHERE email = '$email'";
	$resultado = @mysql_query($query) or die(mysql_error());
	
	if(mysql_num_rows($resultado) <= 0)
		return true;
	else
		return false;
	
	}
	
	//verificar se o email existe
	function Emailexiste1($emailf){
	$query = "SELECT emailf FROM matricula WHERE emailf = '$emailf'";
	$resultado = @mysql_query($query) or die(mysql_error());
	
	if(mysql_num_rows($resultado) <= 0)
		return true;
	else
		return false;
	
	}
	
	//conexão com o banco de dados
	function Conectar(){
		$conexao = @mysql_connect(HOSTNAME, USERNAME, PASSWORD);
		
		if(!$conexao){
			die(mysql_error());
		}
		else{
			mysql_select_db(DATABASE, $conexao) or die (mysql_error());
			
			mysql_query("SET NAMEs 'utf-8'");
			mysql_query("SET character_set_connection=utf8");
			mysql_query("SET character_set_client=utf8");
			mysql_query("SET character_set_results=utf8");
		}
	}
	
?>