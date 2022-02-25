<?php
	// BANCO DE DADOS
	
	$HOSTNAME = "fdb15.eohost.com";
        $USERNAME = "2163708_admin";
	$PASSWORD = "1324354657687980Site*";
	$DATABASE = "2163708_admin";
        
        $connection = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	//URL`S
	
	
	define('URL_BASE','http://plannetroom.mywebcommunity.org/');
	define('URL_COUNT', URL_BASE.'log/index.php');
	
	
	
	
	//DIR`S
	
	define('DIR_BASE',$_SERVER['DOCUMENT_ROOT'].'/plannetroom.mywebcommunity.org/');
	define('DIR_SYSTEM', DIR_BASE.'/system/');
	
	//FILE`S
	
	define('FILE_CONFIG', DIR_SYSTEM.'config.php');
	define('FILE_HELPERS', DIR_SYSTEM.'helpers.php');
	define('FILE_DATABASE', DIR_SYSTEM.'database.php');
	
	
?>