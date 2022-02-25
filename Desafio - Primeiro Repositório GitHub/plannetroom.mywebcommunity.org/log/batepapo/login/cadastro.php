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
<form id="form" name="form" method="post" action="cadastra.php">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="2">
    <tr>
      <td height="100" colspan="2" align="center" bgcolor="#CCF2FF"><strong>Cadastrer novo usario </strong></td>
    </tr>
    <tr>
      <td width="140" align="right" bgcolor="#CCF2FF">Id</td>
      <td width="254" align="left" bgcolor="#CCF2FF"><input name="id" type="text" id="id" size="10" onkeypress="alfa();return veri(event);" />
        <input name="letra" type="hidden" id="letra" value="" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCF2FF">Senha</td>
      <td align="left" bgcolor="#CCF2FF"><input name="senha" type="text" id="senha" size="10" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCF2FF">Nome Completo </td>
      <td align="left" bgcolor="#CCF2FF"><input name="nome" type="text" id="nome" size="25" /></td>
    </tr>
    

    <tr>
      <td colspan="2" align="right" bgcolor="#CCF2FF"><input name="cadatrar" type="submit" id="cadatrar" value="Cadatrar" /></td>
    </tr>
  </table>
</form>
</body>
</html>
