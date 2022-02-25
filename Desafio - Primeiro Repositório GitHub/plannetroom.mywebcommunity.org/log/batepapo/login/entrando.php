<?php

$id=$_POST["id"];
$senh=$_POST["senh"];
$url=$_POST["url"];

if (file_exists("usuarios/$id.txt")){
include("usuarios/$id.txt");
    if($senha=="$senh"){
	
	session_start("segu");
	 $_SESSION["usu"] = $id;
 	 $_SESSION["sen"] = $senh;
		 echo "<script>location.href='$url'</script>";

	
	}
	else{
	 echo "<script>location.href='msg.php?msg=senha&volt=$url'</script>";
	}
	 
}
else{
 echo "<script>location.href='msg.php?msg=id&volt=$url'</script>";
}

//---------------------------------------------
//   Sistema desenvolvido por:                |
//   Dk Luiz - viagiz.com/dkluiz              |
//   Web designer da VIAGIZ.COM               |
//   Dúvidas acesse www.viagiz.com/seguranca  |
//---------------------------------------------
if(!isset($_POST['entrar'])){
		echo '<script language="javascript">location.href="../../index.php"</script>';
	}

?>