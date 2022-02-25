<?php
$id=$_POST["id"];
$senha=$_POST["senha"];
$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$data=$_POST["data"];
$fone=$_POST["fone"];
$letr=$_POST["letra"];
$cad= date("d/m/Y");


$letra= strtoupper("$letr"); // transforma a letra da busca alfabetica em maiuscula

if(file_exists("usuarios/$id.txt")){                         //Se o usuario ja existir não cadastra
echo "<script>location.href='msg.php?msg=existe&volt=cadastro.php'</script>";
}
else{
if($id==""){
echo "<script>location.href='cadastro.php';alert('Escreva seu nome de usuário!');</script>";
}
else{
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


$let="
<?php
if(file_exists(\"usuarios/$id.txt\")){
echo \"<br> <a href=suaconta.php?id=$id>$id</a>\";
}
?>";
$abrele= fopen("listas/$letra.txt","a+");
fwrite($abrele,"$let");
fclose($abrele);

echo "<script>location.href='msg.php?msg=ok'</script>";
}
}
?>
