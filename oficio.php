<html>
<head>
</head>
<body>
<table style="width:1000px; font:Arial; font-size:20px;">
<tr>
<td style="text-align:center;" colspan="2">
<img src="imagens/bandeira_camboriu03.jpg" width="205" height="120" /><br>
<strong>ESTADO DE SANTA CATARINA<br>
PREFEITURA MUNICIPAL DE CAMBORIU<br>
SECRETARIA DE EDUCAÇÃO E CULTURA<br>
<?php echo "". $_POST["instituicao"];?></strong>
<br><br></td>
</tr> <!-- Bandeira -->
<tr><td colspan="2" align="right">
<strong>Camboriú
<?php

/*

$dia_num = date("w");// Mostra o Dia da Semana (Dia da semana em número. Ex.: 0 =&gt; Sunday, 1 =&gt; Monday)
$dia_port = $dia_num;// Atribuição de variáveis
if($dia_port == 0){
print("Domingo");
}elseif($dia_port == 1){
print("Segunda");
}elseif($dia_port == 2){
print("Terça");
}elseif($dia_port == 3){
print("Quarta");
}elseif($dia_port == 4){
print("Quinta");
}elseif($dia_port == 5){
print("Sexta");
}else{
print("Sábado");
}

*/

$dia_mes = date("d");// Coleta o dia do mês
print(", $dia_mes de ");// Imprime a variavel $dia_mes

$mes_num = date("m");// Nome do mês em número. Ex.: 01 =&gt; January, 02 =&gt; February
$mes_port = $mes_num;// Atribuição de variáveis
if($mes_port == 01){
print("Janeiro");
}elseif($mes_port == 02){
print("Fevereiro");
}elseif($mes_port == 03){
print("Março");
}elseif($mes_port == 04){
print("Abril");
}elseif($mes_port == 05){
print("Maio");
}elseif($mes_port == 06){
print("Junho");
}elseif($mes_port == 07){
print("Julho");
}elseif($mes_port == 08){
print("Agosto");
}elseif($mes_port == 09){
print("Setembro");
}elseif($mes_port == 10){
print("Outubro");
}elseif($mes_port == 11){
print("Novembro");
}else{
print("Dezembro");
}
$ano = date("Y");// Coleta o ano corrente
print(" de $ano");// Imprime a variável $ano

?>.</strong>
<br>
<br>
</td></tr> <!-- Data --> 
<tr>
<td><strong>Ofício SEC nº <?php echo "". $_POST["oficio"];?>/<?php echo "".date("Y");?></strong></td>
</tr> <!-- Número de Ofício --> 
<tr><td><strong>A(o) <?php echo "". $_POST["tratamento"];?></strong></td></tr>
<tr><td><strong><?php echo "". $_POST["destino"];?></strong></td></tr>
<tr><td><strong><?php echo "". $_POST["funcao_destino"];?></strong></td></tr>
<tr><td><strong>Camboriú - SC</strong><br><br></td></tr>
<tr><td><strong>Prezado(a) <?php echo "". $_POST["funcao_destino"];?></strong><br><br></td></tr>
<tr><td><p><?php echo "   ". $_POST["texto"];?></p></td></tr>
<tr><td><p>
   Finalizando, colocamo-nos a inteira disposição para quaisquer informações e/ou esclarecimentos que se fizerem necessários.<br>
<br>
Atenciosamente,<br>
<br>
<br>
</p></td></tr>

<tr><td style="text-align:center; height:100px; vertical-align:bottom;"><strong>__________________________________</strong></td></tr>
<tr><td style="text-align:center;"><strong><?php echo "". $_POST["remetente"];?></strong></td></tr>
<tr><td style="text-align:center;"><strong><?php echo "". $_POST["funcao"];?></strong></td></tr>
<tr>
<td colspan="2" style="text-align:center; height:200px; vertical-align:bottom;">

<em><strong>Rua Goiânia, 104 – Centro – Camboriú – SC<br>
Fone: (47) 3365-0020<br>
http://educacao.camboriu.sc.gov.br<br></strong></em>

</td>
</tr>
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
<input type="button" value="Imprimir Ofício" OnClick="javascript:DoPrinting()">
</form>
</td>
</tr>
</table>



</body>
</html>
