<?php
$nick = $_POST['nick'];
$acao = $_POST['acao'];
$cor = $_POST['cor'];
$hora = date("h:i:s");
if(file_exists("bans/$nick.txt")){                         //Se o usuario ja existir n�o cadastra
echo "<script>location.href='ban.htm';alert('Voce esta banido')</script>";
}
else{

if($nick == ""){
echo "<script> location.href='index.htm'; </script>";
exit;
}
$texto = $_POST['texto']; 

$abre = fopen("chat.txt", "a");

if($abre) {

fwrite($abre,"<?php
if(\$nick == \"$texto\"){
echo \"<script> location.href='index.htm';alert('Voc� foi kickado do chat!') </script>\";
exit;
}
?>
<b><font color={$cor}>{$nick}(Admin)</font color={$cor}> <i>kickou $texto, �s {$hora}</i>:</b> <br>");

}

fclose($abre);

 // marca hora da ultima mensagem

$ultima = fopen("ultima.txt", "w");

fwrite($ultima, $hora);

fclose($ultima);
}
?>

<meta http-equiv="refresh" content="0; url=chat.php">