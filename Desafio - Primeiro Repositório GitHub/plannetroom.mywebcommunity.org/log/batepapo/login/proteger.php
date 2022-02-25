<?php
session_start("segu");
function seguranca(){
$url = $_SERVER["PHP_SELF"];
 if(($_SESSION["usu"]!="") OR ($_SESSION["sen"]!="")){
 
 	if (file_exists("usuarios/".$_SESSION["usu"].".txt")){
 	include("usuarios/".$_SESSION["usu"].".txt");
 	if($_SESSION["sen"]==$senha){
	 $user=$_SESSION["usu"]; echo "<div align=right><font size=2px>Olá <b>$user</b>, Bem Vindo! | <a href=suaconta.php?id=$user>Config</a> | <a href=sair.php>Sair</a></font></div>"; 
	}
 	else{ echo "<script>location.href='entrar.php?url=$url'</script>";
 	}
 	}
 
 else{ echo "<script>location.href='entrar.php?url=$url'</script>";
 }
 }
 else{
 echo "<script>location.href='entrar.php?url=$url'</script>";
}
}


//---------------------------------------------
//   Sistema desenvolvido por:                |
//   Dk Luiz - viagiz.com/dkluiz              |
//   Web designer da VIAGIZ.COM               |
//   Dúvidas acesse www.viagiz.com/seguranca  |
//---------------------------------------------


?>
