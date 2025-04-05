<html>
<head>
</head>
<body>
<table style="width:1000px;">
<tr>
<td style="text-align:center;" colspan="2">
<img src="imagens/bandeira_camboriu02.jpg" width="348" height="244" /><br>
<strong>PREFEITURA MUNICIPAL DE CAMBORIU<br>
SECRETARIA DE EDUCAÇÃO E CULTURA</strong>
<br><br><br></td>
</tr>
<tr>
<tr><td colspan="2" align="center"><h1><strong>PROTOCOLO</strong></h1></td></tr>
<tr>
<td width="41"><strong>Para:</strong></td><td width="947"><?php echo "". $_POST["destino"];?></td>
</tr>
<tr><td colspan="2" style="background:#999;"><strong>Item entregue:</strong></td></tr>
<tr><td colspan="2">
<?php
echo "". $_POST["item01"]."<br />\n";
echo "". $_POST["item02"]."<br />\n";
echo "". $_POST["item03"]."<br />\n";
echo "". $_POST["item04"]."<br />\n";
echo "". $_POST["item05"]."<br />\n";
echo "". $_POST["item06"]."<br />\n";
echo "". $_POST["item07"]."<br />\n";
echo "". $_POST["item08"]."<br />\n";
echo "". $_POST["item09"]."<br />\n";
echo "". $_POST["item10"]."<br />\n";
?>
</td></tr>
<tr><td colspan="2" style="text-align:center; height:100px; vertical-align:bottom;">
Assinatura:__________________________________
<br>
<br>
</td></tr>
<tr><td colspan="2"><?php echo $msg = "Data: ".date("d/m/Y")." "; echo $msg = ", ".date("H:i")." horas"; ?></td></tr>
<tr>
<td colspan="2" style="text-align:center; height:100px; vertical-align:bottom;">
<script language="JavaScript1.2">
<!--
function DoPrinting(){
if (!window.print){
alert("Use o Netscape  ou Internet Explorer \n nas versões 4.0 ou superior!")
return
}
window.print()
}
//-->
</script>
<form>
<input type="button" value="Imprimir Protocolo" OnClick="javascript:DoPrinting()">
</form>
</td>
</tr>

<tr>
<td colspan="2" style="text-align:center; height:200px; vertical-align:bottom;">

<em><strong>Rua Goiânia, 104 – Centro – Camboriú – SC<br>
Fone: (47) 3365-0020<br>
http://educacao.camboriu.sc.gov.br<br></strong></em>

</td>
</tr>
</table>



</body>
</html>
