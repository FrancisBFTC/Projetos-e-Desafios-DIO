<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/account/system/system.php';
	AccessPrivate();
	
	if(!isset($_POST['post'])){
		echo '<script language="javascript">location.href="../../index.php"</script>';
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {color: #000099}
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
.style2 {font-size: 9px}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>P&aacute;gina protegida</title>
<script language="JavaScript" type="text/javascript">
<!--
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
<form action="entrando.php" method="post" name="form" id="form">
  <table width="200" border="1" align="center" cellpadding="0" cellspacing="0" style="border: dashed; border-color:#000000">
    <tr>
      <td><table width="200" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
          <td height="100" colspan="2" align="center" valign="middle" bgcolor="#BBDDFF"><strong><span class="style1">Moderacao</span><br />
           Faça o login abaixo
 </strong>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#BBDDFF">Id</td>
          <td bgcolor="#BBDDFF"><input name="id" type="text" id="id" size="10" onkeypress="return veri(event);" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#BBDDFF">Senha</td>
          <td bgcolor="#BBDDFF"><input name="senh" type="password" id="senh" size="10" /></td>
        </tr>
        <tr>
          <td colspan="2" align="right" bgcolor="#BBDDFF"><input name="voltar" type="hidden" id="voltar" value="<?php $volt = $_SERVER["PHP_SELF"];
		  echo "$volt";
		       ?>" />
          <input name="url" type="hidden" id="url" value="<?php $url=$_GET["url"]; echo "$url";    ?>" />
          <input name="entrar" type="submit" id="entrar" value="Entrar" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="222" height="10" align="right" valign="top"><p><a href="esqueci.php">Esqueceu sua senha?</a></p>
      <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><table border="1" style="border: dashed; border-color:#000000">
        <tr><td align="center" valign="middle" bgcolor="#BBDDFF">   

        <?php
	  include("opcaolink.txt");
	  if($deixarlink=="sim"){
	  echo" <p>&nbsp; </p>Ainda n&atilde;o &eacute; cadastrado? Clique <a href=cadastro.php>aqui</a> para se cadastrar";
	  }
	  else {}
	  $end = $_SERVER["PHP_SELF"];
	  echo" <iframe frameborder='0' width='200' height='50' style='border:hidden; background-color:#BBE9FF' src='http://www.viagiz.com/seguranca/emuso.php?end=$end'></iframe>";
	  ?>

    
     </td>
        </tr></table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
</form>
</body>
</html>
