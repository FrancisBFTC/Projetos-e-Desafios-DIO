<?php
$id=$_POST["id"];
$senha=$_POST["senha"];
$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$data=$_POST["data"];
$fone=$_POST["fone"];
$cad=$_POST["cad"];

$salvar= "
<?php
\$senha=\"$senha\";
\$nome=\"$nome\";
\$cpf=\"$cpf\";
\$data=\"$data\";
\$fone=\"$fone\";
\$cad=\"$cad\";
?>";
$abreid= fopen("usuarios/$id.txt","w");  //cadastrando o usuario
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
