<?php
$op=$_GET["op"];
$opcao=
"<?php
\$deixarlink=\"$op\";
?>";
if($op=="sim"){
$abre= fopen("opcaolink.txt", "w");
fwrite($abre, "$opcao");
fclose($abre);

echo "<script>location.href='adm.php';alert('Feito! Agora todos que entrarem na p�gina de login poder�o se cadastrar.');</script>";
}
if($op=="nao"){
$abre= fopen("opcaolink.txt", "w");
fwrite($abre, "$opcao");
fclose($abre);

echo "<script>location.href='adm.php';alert('Feito! Agora para que as pessoas possam se cadastrar voc� deve enviar o endere�o da p�gina de cadastro para elas.');</script>";
}
?>