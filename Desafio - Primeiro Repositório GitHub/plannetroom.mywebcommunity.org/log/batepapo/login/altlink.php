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

echo "<script>location.href='adm.php';alert('Feito! Agora todos que entrarem na página de login poderão se cadastrar.');</script>";
}
if($op=="nao"){
$abre= fopen("opcaolink.txt", "w");
fwrite($abre, "$opcao");
fclose($abre);

echo "<script>location.href='adm.php';alert('Feito! Agora para que as pessoas possam se cadastrar você deve enviar o endereço da página de cadastro para elas.');</script>";
}
?>