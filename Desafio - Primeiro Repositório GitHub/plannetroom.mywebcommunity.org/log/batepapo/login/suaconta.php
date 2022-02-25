<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ver Dados</title>
<style type="text/css">
<!--
.style1 {font-size: 12px}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {font-size: 9px}
a:link {
	color: #666666;
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
<script language="javascript">
function WinOpen(pagina,janela,opcoes) { 
  window.open(pagina,janela,opcoes);
  }
  </script>
</head>

<body>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td height="100" colspan="2" align="center" bgcolor="#CCF2FF"><strong>Informa&ccedil;&otilde;es de 
      <?php
	$id=$_GET["id"];
	@include("usuarios/$id.txt");
echo "$id";
	?>
    </strong></td>
  </tr>
  <tr>
    <td width="140" align="left" bgcolor="#CCF2FF">Id</td>
    <td width="254" align="left" bgcolor="#CCF2FF">
	<?php
echo "$id";
	?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#CCF2FF">Senha</td>
    <td align="left" bgcolor="#CCF2FF"><?php echo"$senha";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#CCF2FF">Nome Completo </td>
    <td align="left" bgcolor="#CCF2FF"><?php echo"$nome";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#CCF2FF">CPF</td>
    <td align="left" bgcolor="#CCF2FF"><?php echo"$cpf";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#CCF2FF">Data Nascimento </td>
    <td align="left" bgcolor="#CCF2FF"><?php echo"$data";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#CCF2FF">Telefone</td>
    <td align="left" bgcolor="#CCF2FF"><?php echo"$fone";  ?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#CCF2FF">Cadastro</td>
    <td align="left" bgcolor="#CCF2FF"><?php echo"$cad";  ?></td>
  </tr>
  <tr>
    <td colspan="2" align="right" bgcolor="#CCF2FF"><a href="javascript:WinOpen('alterar.php?id=<?php echo"$id"; ?>','Popup','width=500,height=400,top=100,left=250');">Alterar dados</a> </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>

</html>
