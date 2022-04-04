<?php
	
	//Banco de dados
	
	define('HOSTNAME','fdb15.eohost.com');
	define('USERNAME','');
	define('PASSWORD','');
	define('DATABASE','');
	
	//Url´s
	
	define('URL_INI', 'http://planetamusical.atwebpages.com/logadmin/');
	define('URL_MAT', URL_INI.'cad/matricula.php');
	define('URL_CAD', URL_INI.'cad/cadastro.php');
	define('URL_ADM', URL_INI.'homeadmin.php');
	define('URL_DAD', URL_INI.'cad/dados.php');
	
	//Dir´s
	
	define('DIR_INI', $_SERVER['DOCUMENT_ROOT'].'/logadmin/');
	define('DIR_ADMSYSTEM', DIR_INI.'systemadmin/');
	
	//File`s
	
	define('FILE_ADMCONFIG', DIR_ADMSYSTEM.'adminconfig.php');
	define('FILE_ADMHELPERS', DIR_ADMSYSTEM.'adminhelpers.php');
	define('FILE_ADMDATABASE', DIR_ADMSYSTEM.'admindatabase.php');
	
