<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastre-se</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {font-size: 12px}
a:link {
	color: #999999;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
}
-->
</style>
<script language="javascript" type="text/javascript">
function alfa(){
var texto=(document.form.id.value);
var letra=(document.form.letra.value);
if(letra==""){
document.form.letra.value=(texto);
}
if(texto==""){
document.form.letra.value=(texto);
}
}

function ini(){
document.form.id.focus();
}
function veri(objEvent){
keyascii = objEvent.keyCode;
if (keyascii == 32){
return false;
}else{
return true;
}
}
//-->
</script>
</head>
<body onLoad="ini();">
<?php 
$id=$_GET["id"];
include("usuarios/$id.txt");
?>
<form id="form" name="form" method="post" action="altera.php">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="2">
    <tr>
      <td height="100" colspan="2" align="center" bgcolor="#CCF2FF"><strong>Altera dados </strong></td>
    </tr>
    <tr>
      <td width="140" align="left" bgcolor="#CCF2FF">Id</td>
      <td width="254" align="left" bgcolor="#CCF2FF"><input name="id" type="text" id="id" onkeypress="alfa();return veri(event);" value="<?php echo"$id"; ?>" size="10" readonly="true" /></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#CCF2FF">Senha</td>
      <td align="left" bgcolor="#CCF2FF"><input name="senha" type="text" id="senha" value="<?php echo"$senha"; ?>" size="10" /></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#CCF2FF">Nome Completo </td>
      <td align="left" bgcolor="#CCF2FF"><input name="nome" type="text" id="nome" value="<?php echo"$nome"; ?>" size="25" /></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#CCF2FF">CPF</td>
      <td align="left" bgcolor="#CCF2FF"><input name="cpf" type="text" id="cpf" value="<?php echo"$cpf"; ?>" size="20" />
        <span class="style1">        (s&oacute; numeros) </span></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#CCF2FF">Data Nascimento </td>
      <td align="left" bgcolor="#CCF2FF"><input name="data" type="text" id="data" value="<?php echo"$data"; ?>" size="10" />
        <span class="style1">        (00/00/000) </span></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#CCF2FF">Telefone</td>
      <td align="left" bgcolor="#CCF2FF"><input name="fone" type="text" id="fone" value="<?php echo"$fone"; ?>" size="15" /></td>
    </tr>
    <tr>
      <td align="left"><a href="deleta.php?id=<?php echo"$id"; ?>">Excluir conta </a></td>
      <td align="right" bgcolor="#CCF2FF"><input name="cad" type="hidden" id="cad" value="<?php echo"$cad"; ?>" />
        <input name="cadatrar" type="submit" id="cadatrar" value="Alterar" /></td>
    </tr>
  </table>
</form>
</body>
<!--
//---------------------------------------------
//   Sistema desenvolvido por:                |
//   Dk Luiz - viagiz.com/dkluiz              |
//   Web designer da VIAGIZ.COM               |
//   Dúvidas acesse www.viagiz.com/seguranca  |
//---------------------------------------------

-->
</html>
