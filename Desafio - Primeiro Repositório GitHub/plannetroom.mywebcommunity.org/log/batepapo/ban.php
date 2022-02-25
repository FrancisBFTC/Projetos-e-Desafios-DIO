<?php
$nick = $_POST['nick'];
$acao = $_POST['acao'];
$cor = $_POST['cor'];
$hora = date("h:i:s");
if($nick == ""){
echo "<script> location.href='index.htm'; </script>";
exit;
}
$texto = $_POST['texto']; 

$abre = fopen("bans/$texto.txt", "a");

if($abre) {

fwrite($abre,"ban");

}

fclose($abre);


echo "<script>alert('$texto banido com sucesso!')</script>";

$abrec = fopen("chat.txt", "a");



fwrite($abrec,"<b><font color=$cor>$nick</font color=$cor> <i>(Admin), às $hora</i>:</b> $texto foi banido por $nick <br>");



fclose($abrec);


?>

<meta http-equiv="refresh" content="0; url=chat.php">