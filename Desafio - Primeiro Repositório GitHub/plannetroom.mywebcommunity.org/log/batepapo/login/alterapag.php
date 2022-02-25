<?php include("proteger.php"); seguranca();

$pagina=$_POST["pagina"];
$user=$_SESSION["usu"];


$salvar= "$pagina";
$abreid= fopen("paginas/$user.html","w");  //cadastrando o usuario
fwrite($abreid,"$salvar");
fclose($abreid);

echo "<script>location.href='msg.php?msg=alt'</script>";


//---------------------------------------------
//   Sistema desenvolvido por:                |
//   Dk Luiz - viagiz.com/dkluiz              |
//   Web designer da VIAGIZ.COM               |
//   Dúvidas acesse www.viagiz.com/seguranca  |
//---------------------------------------------


?>
