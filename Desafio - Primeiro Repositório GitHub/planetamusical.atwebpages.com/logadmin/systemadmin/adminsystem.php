<?php
	
	Iniciar();
	
	//Valida form de login
	function Validarlogin(){
		if(!!Pegarpost('admin')){
			$message = null;
			
			$usuario = Pegarpost('usuario');
			$senha = Pegarpost('senha');
			$email = Pegarpost('email');
			
			if(empty($usuario))
				$message = '<font color="red">informe seu usuário</font>';
			else if(empty($senha))
				$message = '<font color="red">informe sua senha</font>';
			
			else{
				
				 if(!Verificarusuario($usuario, $senha))
					$message = '<font color="red">Nome de usuário ou senha incorretos!</font>';
				else if(!Verificarusuario($usuario, $senha, true))
					$message = '<font color="red">Comprove o pagamento para ativar a sua conta!</font>
				<a href="?enter">Clique aqui para prosseguir<font color="blue"></font></a>';
				
				else{
					Criarsessao($usuario, $senha);
				}
			
			
			}
			
			echo($message != null) ? $message.'<hr>' : null;
		}
	}
	
	//Valida form de login
	function Validarlogin1(){
		if(!!Pegarpost('enviar')){
			$message = null;
			
			$nomef = Pegarpost('nomef');
			
			
			if(empty($nomef))
				$message = '<font color="red">Informe seu nome para acessar os dados!</font>';
			
			
			else{
				
				 if(!Verificarusuario1($nomef))
					$message = '<font color="red">Nome incorreto ou inexistente!</font>';
				
				else{
					Criarsessao1($nomef);
				}
			
			
			}
			
			echo($message != null) ? $message.'<hr>' : null;
		}
	}
	
	// validação form de cadastro
	function Validarcadastro(){
		if(!!Pegarpost('admin')){
			
			$message = null;
			$nome 		= Pegarpost('nome');
			$email 		= Pegarpost('email');
			$usuario   = Pegarpost('usuario');
			$senha   = Pegarpost('senha');
			$confirmar	= Pegarpost('confirmar');
			
			if (empty($nome))
				$message = '<font color="red">informe seu nome!</font>';
			else if (empty($email))
				$message = '<font color="red">Informe seu e-mail!</font>';
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
				$message = '<font color="red">Informe um E-mail válido!</font>';
			else if (empty($usuario))
				$message = '<font color="red">Informe seu Usuário!</font>';
			else if (empty($senha))
				$message = '<font color="red">Informe sua Senha!</font>';
			else if (empty($confirmar))
				$message = '<font color="red">Confirme sua Senha!</font>';
			else if ($senha != $confirmar)
				$message = '<font color="red">As senhas não correspondem!</font>';
			else{
				if(!Emailexiste($email))
					$message = '<font color="red">Este email já foi cadastrado!</font>';
				else if(!Usuarioexiste($usuario))
					$message = '<font color="red">Este nome de usuário já foi cadastrado!</font>';
				else{
					$registro = Registro($nome, $email, $usuario, $senha);
					
					
					if(!$registro)
						$message = '<font color="red">Desculpe, Ocorreu um erro...</font>';
					else
						Criarsessao($usuario, $senha);
						 
				}
			}
			
			echo ($message != null) ? $message.'<hr>' : null;
		}
	}
	
	// validação form de cadastro
	function Validarcadastro1(){
		if(!!Pegarpost('env')){
			
			$message = null;
			$nomef 		= Pegarpost('nomef');
			$emailf 		= Pegarpost('emailf');
			$dataf  = Pegarpost('dataf');
			$idadef   = Pegarpost('idadef');
			$sexof	= Pegarpost('sexof');
			$cursof	= Pegarpost('cursof');
			$nomepaif	= Pegarpost('nomepaif');
			$nomemaef	= Pegarpost('nomemaef');
			$endereçof	= Pegarpost('endereçof');
			$cidadef	= Pegarpost('cidadef');
			$estadof	= Pegarpost('estadof');
			$fonef	= Pegarpost('fonef');
			
			if (empty($nomef))
				$message = '<font color="red">informe seu nome!</font>';
			else if (empty($emailf))
				$message = '<font color="red">Informe seu e-mail!</font>';
			else if(!filter_var($emailf, FILTER_VALIDATE_EMAIL))
				$message = '<font color="red">Informe um E-mail válido!</font>';
			else if (empty($dataf))
				$message = '<font color="red">Informe sua data!</font>';
			else if (empty($idadef))
				$message = '<font color="red">Informe sua Idade!</font>';
			else if (empty($sexof))
				$message = '<font color="red">Informe seu sexo!</font>';
			else if (empty($cursof))
				$message = '<font color="red">Informe seu curso!</font>';
			else if (empty($nomepaif))
				$message = '<font color="red">Informe o nome do pai!</font>';
			else if (empty($nomemaef))
				$message = '<font color="red">Informe o nome da mãe!</font>';
			else if (empty($endereçof))
				$message = '<font color="red">Informe seu endereço!</font>';
			else if (empty($cidadef))
				$message = '<font color="red">Informe a cidade que você mora!</font>';
			else if (empty($estadof))
				$message = '<font color="red">Informe o estado que você mora!</font>';
			else if (empty($fonef))
				$message = '<font color="red">Informe seu telefone!</font>';
				
			
			else{
				if(!Emailexiste1($emailf))
					$message = '<font color="red">Este email já foi cadastrado!</font>';
				else if(!nomeexiste1($nomef))
					$message = '<font color="red">Este nome já foi cadastrado!</font>';
				else{
					$cadastro = Cadastro($nomef, $emailf, $dataf, $idadef, $sexof, $cursof, $nomepaif, $nomemaef, $endereçof, $cidadef, $estadof, $fonef);
					
					
					if(!$cadastro)
						$message = '<font color="red">Desculpe, Ocorreu um erro...</font>';
					else
						Criarsessao1($nomef);
						 echo "<font color='blue'>Sua matrícula foi realizada com sucesso!</font>";
				}
			}
			
			echo ($message != null) ? $message.'<hr>' : null;
		}
	}
	//Inicia o sistema
	
	function Iniciar(){
		session_start();
		
		//Chama adminconfig.php
		
		$Config = $_SERVER['DOCUMENT_ROOT'] .'/logadmin/systemadmin/adminconfig.php';
		if(!file_exists($Config)){
			die("<font color='red'>Desculpe,O arquivo adminconfig não existe!</font><br>");
		}
		else{
			require_once $Config;
			
			
		}
		
		//Chama adminhelpers.php
                $Config = $_SERVER['DOCUMENT_ROOT'] .'/logadmin/systemadmin/adminhelpers.php';
		
		if(!file_exists($Config)){
			die('<font color="red">Desculpe, O arquivo adminhelpers não existe!</font><br>');
		}
		else{
			
			require_once FILE_ADMHELPERS;
		}
		
		//Chama admindatabase.php
		
		if(!file_exists(FILE_ADMDATABASE)){
			die('<font color="red">Desculpe, o arquivo admindatabase não existe!</font><br>');
		}
		else{
			
			require_once FILE_ADMDATABASE;
		}
		
		Conectar();
		Sairlog();
		Sairlog1();
	}

?>