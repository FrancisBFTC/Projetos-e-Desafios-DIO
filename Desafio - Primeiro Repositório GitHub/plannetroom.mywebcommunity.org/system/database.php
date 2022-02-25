<?php
	//Recupera informações do usuário
	function GetUser($key = null){
                include 'config.php';
                
		if(!IsLogged())
			return false;
		else{
			$userkey = UserLog();
			$query = "SELECT * FROM cadastro WHERE userkey = '$userkey' LIMIT 1";
			$result = mysqli_query($connection, $query) or die(mysqli_error());
			$data = mysqli_fetch_assoc($result);
			
			if($key == null)
				return $data;
			else
				return (isset($data[$key])) ? $data[$key] : false;
		}
	}
	
	//Recupera informações do usuário
	function Pegarusuario($key = null){
                include 'config.php';
                
		if(!IsLogged())
			return false;
		else{
			$userkey = UserLog();
			$query = "SELECT * FROM posts LIMIT 1";
			$result = mysqli_query($connection, $query) or die(mysqli_error());
			$data = mysqli_fetch_assoc($result);
			
			if($key == null)
				return $data;
			else
				return (isset($data[$key])) ? $data[$key] : false;
		}
	}
	
	//Recupera informações do usuário
	function GetUser1($key = null){
                include 'config.php';
                
		if(!IsLogged())
			return false;
		else{
			$userkey = UserLog();
			$id = $_GET['id'];
			$query = "SELECT * FROM açao WHERE id_usuario='$id' LIMIT 1";
			$result = mysqli_query($connection, $query) or die(mysqli_error());
			$data = mysqli_fetch_assoc($result);
			
			if($key == null)
				return $data;
			else
				return (isset($data[$key])) ? $data[$key] : false;
		}
	}
	
	//verifica Usuário logado
	function StayLogged(){
                include 'config.php';
                
		$userkey = UserLog();
		$query = "SELECT userkey FROM cadastro WHERE userkey = '$userkey'";
		$result = mysqli_query($connection, $query) or die (mysqli_error());
		
		if(mysqli_num_rows($result) <= 0)
			return false;
		else
			return true;
	}

	
	
	//Recupera Key
	function GetKey($username, $password){
		$dataUser =  UserVerify($username, $password);
		return $dataUser;
	}
	
	//Verificação para logar
	function UserVerify($username, $password, $status = false){
                include 'config.php';
                
		$password 	= CryptPassword($password);
		$query		= "SELECT * FROM cadastro WHERE username = '$username' AND password = '$password'";
		$result		= mysqli_query($connection, $query) or die (mysqli_error());
		
		if(mysqli_num_rows($result) <= 0)
			return false;
		else{
			$data = mysqli_fetch_assoc($result);
			return $data['userkey'];
		}
	}
	

	
	
	//Cadastrar o usuario
	function Register($name, $mail, $music, $username, $password, $register, $acao1, $acao2, $status = 1){
                include 'config.php';
                
		$password 	= CryptPassword($password);
		$userkey  	= keyGenerator();
		$register = date("d/m/Y");
		$query 		= "INSERT INTO cadastro ( name, mail, music, username, password, userkey, register, acao1, acao2, status)";
		$query		.= "VALUES ('$name', '$mail', '$music', '$username', '$password', '$userkey', '$register', '$acao1', '$acao2', $status)";
		
		return mysqli_query($connection, $query) or die(mysqli_error());
		
	}
	
	//vericar se o login existe
	function UserNameExists($username){
                include 'config.php';
                
		$query = "SELECT username FROM cadastro WHERE username = '$username'";
		$result = mysqli_query($connection, $query) or die(mysqli_error());
	
	if(mysqli_num_rows($result) <= 0)
		return true;
	else
		return false;
	}
	
	
	//verificar se o email existe
	function MailExists($mail){
        include 'config.php';
        
	$query = "SELECT mail FROM cadastro WHERE mail = '$mail'";
	$result = mysqli_query($connection, $query) or die(mysqli_error());
	
	if(mysqli_num_rows($result) <= 0)
		return true;
	else
		return false;
	
	}
	//Conexão com Banco de Dados
	
	function Connect(){
		include 'config.php';
                
		if(!$connection){
			die(mysqli_error());
		}
		else{
			mysqli_select_db($connection, $DATABASE) or die (mysqli_error($connection));
			
			mysqli_query($connection, "SET NAMEs 'utf-8'");
			mysqli_query($connection, "SET character_set_connection=utf8");
			mysqli_query($connection, "SET character_set_client=utf8");
			mysqli_query($connection, "SET character_set_results=utf8");
		}
	}
	
	
	


?>
