<?php
	
	
	
	
	//Limpa string
	
	function Clearstring($str){
                include 'config.php';
		return mysqli_real_escape_string($connection, strip_tags(trim($str)));
	}

	//Redireciona
	
	function Redirect($url){
		header('Location:' .$url);
		die();
	}
	
	
	//Recuperar POST
	
	function GetPost($key = null){
		if($key === null){
			return $_POST;
		}
		else{
			return (isset($_POST[$key])) ? ClearString($_POST[$key]) :	false;
		}
	}
	
	//Gera chave de Usuário
	
	function KeyGenerator(){
		return sha1(rand());
	}
	
	// Criptografia de senhas
	
	
	
	function CryptPassword($password){
		return sha1($password);
	}
	
	
	//verifica o login
	function IsLogged(){
		
		
		if(!isset($_SESSION['userLog']) || empty($_SESSION['userLog'])){
			return false;
		}
		else{
			if(StayLogged())
				return true;
			else
				DestroySession();
		}
	}
	
	
	
	/* Session */
	
	//Efetua logout
	function DoLogout(){
		if(isset($_GET['logout']))
			DestroySession();
	}
	
	function EnterIn(){
		if(isset($_GET['enter'])){
			header("location:pages/guitarregister3.php");
			
		}
		
		
		
	}
	
	
	
	//Destroi sessão
	function DestroySession(){
		unset($_SESSION['userLog']);
		AccessPrivate();
	}
	
	
	
	//cria a sessão
	function CreateSession($username, $password){
		$key = GetKey($username, $password);
		UserLog($key);
		AccessPublic();
	}
	
	
	
	//seta ou recupera USER LOG
	function UserLog($value = null){
		if($value === null){
			return $_SESSION['userLog'];
		}
		else{
			$_SESSION['userLog'] = $value;
		}
	}
	
	
	
	/* Proteção */
	
	
	
	
	//controla acesso publico
	
	
	function AccessPublic(){
                include 'config.php';
		if(IsLogged()){
			$data = GetUser();
			$id = $data['userkey'];
			//Redirect(URL_COUNT ."?id=$id");
                        header('Location: http://plannetroom.mywebcommunity.org/log/index.php?id='.$id);
                        //die();
		}
	}
	
	//controla acesso privado
	function AccessPrivate(){
               // include 'config.php';
		if (!IsLogged()){
                   
			 //Redirect(URL_BASE);
                         header('Location: http://plannetroom.mywebcommunity.org/index.php');
                         //die();
			
		}
	}
	
	
	
	

?>