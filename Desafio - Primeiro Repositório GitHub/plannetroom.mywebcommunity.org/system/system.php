<?php
	
	
	Init();
	

	
	
	//Valida form de login
	function ValidateFormLogin(){
		if(!!GetPost('submit')){
			$message = null;
			
			$username = GetPost('username');
			$password = GetPost('password');
			$mail = GetPost('mail');
			
			if(empty($username))
				$message = '<font color="red">informe seu usuário</font>';
			else if(empty($password))
				$message = '<font color="red">informe sua senha</font>';
			
			else{
				
				 if(!UserVerify($username, $password))
					$message = '<font color="red">Nome de usuário ou senha incorretos!</font>';
				else if(!UserVerify($username, $password, true))
					$message = '<font color="red">Sua conta está bloqueada!</font>';
				
				else{
					CreateSession($username, $password);
				}
			
			
			}
			
			echo($message != null) ? $message.'<hr>' : null;
		}
	}
	
	
	
	
	// validação form de cadastro
	function ValidateFormRegister(){
		if(!!GetPost('send')){
			
			$message = null;
			$name 		= GetPost('name');
			$music 		= GetPost('music');
			$mail 		= GetPost('mail');
			$username   = GetPost('username');
			$password   = GetPost('password');
			$register   = GetPost('register');
			$acao1   	= GetPost('acao1');
			$acao2   	= GetPost('acao2');
			$confirm	= GetPost('confirm');
			
			if (empty($name))
				$message = '<font color="red">informe seu nome!</font>';
			else if (empty($mail))
				$message = '<font color="red">Informe seu e-mail!</font>';
			else if (empty($music))
				$message = '<font color="red">Informe sua musicalidade, Ex.: "Guitarrista","Vocalista","multi-instrumentista",etc...!</font>';
			else if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
				$message = '<font color="red">Informe um E-mail válido!</font>';
			else if (empty($username))
				$message = '<font color="red">Informe seu Usuário!</font>';
			else if (empty($password))
				$message = '<font color="red">Informe sua Senha!</font>';
			else if ((strlen($password)) < 8)
				$message = '<font color="red">Senha no mínimo 8 caracteres!</font>';
			else if (empty($confirm))
				$message = '<font color="red">Confirme sua Senha!</font>';
			else if ($password != $confirm)
				$message = '<font color="red">As senhas não correspondem!</font>';
			else{
				if(!MailExists($mail))
					$message = '<font color="red">Este email já foi cadastrado!</font>';
				else if(!UserNameExists($username))
					$message = '<font color="red">Este usuário já foi cadastrado!</font>';
				else{
					$register = Register($name, $mail,  $music, $username, $password, $register, $acao1, $acao2);
					
					
					if(!$register)
						$message = '<font color="red">Desculpe, Ocorreu um erro...</font>';
					else
						CreateSession($username, $password);
                                                
                                                
                                                
					
						
				}
                                
                                
			}
			
			echo ($message != null) ? $message.'<hr>' : null;
                        
		}
	}
	

	
	
	//inicia o sistema
	function Init(){
		@session_start();	
		
		//chama config.php
		$configFile = $_SERVER['DOCUMENT_ROOT'] . '/system/config.php';
		
		if(!file_exists($configFile)){
			die('<font color="red">Erro - O arquivo config.php não existe!</font>');
		}
		else{
			require_once $configFile;
		}
		
		//chama helpers.php
                //Chama adminhelpers.php
                $helpers = $_SERVER['DOCUMENT_ROOT'] .'/system/helpers.php';
		if(!file_exists($helpers)){
			die('<font color="red">Erro - O arquivo helpers.php não existe!</font>');
		}
		else{
			require_once $helpers;
		}
		
		
		//chama database.php
                //Chama adminhelpers.php
                $database = $_SERVER['DOCUMENT_ROOT'] .'/system/database.php';
		if(!file_exists($database)){
			die('<font color="red">Erro - O arquivo database.php não existe!</font>');
		}
		else{
			require_once $database;
		}
		
		Connect();
		DoLogout();
		EnterIn();
		
	
	}
	
	
?>