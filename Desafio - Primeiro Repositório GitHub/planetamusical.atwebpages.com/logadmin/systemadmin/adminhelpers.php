<?php

	//Isto limpa as strings
	function Limparstring($string){
		return mysql_real_escape_string(strip_tags(trim($string)));
	}
	
	//isto redireciona para alguma página
	function Redirecionar($url){
		header("Location: " .$url);
		die();
	}
	
	//isto recupera/pega os posts do "botão submit"
	function Pegarpost($key = null){
		if($key === null){
			return $_POST;
		}
		else{
			return(isset($_POST[$key])) ? Limparstring($_POST[$key]) : false;
		}
	}
	
	
	
	//isto gera a chave de usuário
	function Gerarchave(){
		return sha1(rand());
	}
	
	//isto gera a chave de usuário
	function Gerarchave1(){
		return sha1(rand());
	}
	
	//isto Criptografa as senhas
	function Criptosenha($senha){
		return sha1($senha);
	}
	
	//seta ou recupera/pega usuário logado
	function Usuariologado($valor = null){
		if($valor === null){
			return $_SESSION['Usuariologado'];
		}
		else{
			$_SESSION['Usuariologado'] = $valor;
		}
	}
	
	//seta ou recupera/pega usuário logado
	function Usuariologado1($valor = null){
		if($valor === null){
			return $_SESSION['Usuariologado1'];
		}
		else{
			$_SESSION['Usuariologado1'] = $valor;
		}
	}
	//isto verifica o login
	function Estalogado(){
		if(!isset($_SESSION['Usuariologado']) || empty($_SESSION['Usuariologado'])){
			return false;
		}
		else{
			if(Ficarlogado())
				return true;
			else{
				Destruirsessao();
			}
		}
	}
	
	//isto verifica o login
	function Estalogado1(){
		if(!isset($_SESSION['Usuariologado1']) || empty($_SESSION['Usuariologado1'])){
			return false;
		}
		else{
			if(Ficarlogado1())
				return true;
			else{
				Destruirsessao1();
			}
		}
	}
	
	//Efetua logout
	function Sairlog(){
		if(isset($_GET['sair']))
			Destruirsessao();
	}
	
	//Efetua logout
	function Sairlog1(){
		if(isset($_GET['voltar']))
			Destruirsessao1();
	}
	
	//isto destrói a sessão do usuario
	function Destruirsessao(){
		unset($_SESSION['Usuariologado']);
		Acessoprivado();
	}
	
	//isto destrói a sessão do usuario
	function Destruirsessao1(){
		unset($_SESSION['Usuariologado1']);
		Acessoprivado1();
	}
	
	//isto cria a sessão
	function Criarsessao($usuario, $senha){
		$chave = Pegarchave($usuario, $senha);
		Usuariologado($chave);
		Acessopublico();
	}
	
	//isto cria a sessão
	function Criarsessao1($nomef){
		$chavef = Pegarchave1($nomef);
		Usuariologado1($chavef);
		Acessopublico1();
	}

	
	//controla o acesso publico
	function Acessopublico(){
		if(Estalogado()){
			Redirecionar(URL_ADM);
		}
	}
	
	//controla o acesso publico
	function Acessopublico1(){
		if(Estalogado1()){
			Redirecionar(URL_DAD);
		}
	}
	
	//controla o acesso privado
	function Acessoprivado(){
		if(!Estalogado()){
			Redirecionar(URL_INI);
		}
	}
	
	//controla o acesso privado
	function Acessoprivado1(){
		if(!Estalogado1()){
			Redirecionar(URL_ADM);
		}
	}
	
?>