<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comentando...</title>
</head>
<body>

<?php

$ponteiro = fopen ("prestacaodecontas_blog02.html", "r");
while (!feof($ponteiro)){
    $char .= fgetc($ponteiro);
} 
fclose ($ponteiro);//fecha o arquivo

$ponteiro = fopen ("prestacaodecontas_blog02.html", "w");
fwrite($ponteiro, "");
fclose ($ponteiro);//fecha o arquivo
$mensagem      = $_POST["texto"];//pega a mensagem inserida
$msg .= "
<table border='1' width='760px' background='imagens/fundo_titulo.png'>
<tr>
<td style='font-size:20px; text-align:center'>
$mensagem
</td>
</tr>
";//adiciona o conteudo da mensagem
$msg .= "</table>";//termina a mensagem
$ponteiro = fopen ("prestacaodecontas_blog02.html", "a");//arquivo em que serao postados os comentarios
fwrite($ponteiro, "$msg");//escreve no arquivo
fclose ($ponteiro);//fecha o arquivo

$ponteiro = fopen ("prestacaodecontas_blog02.html", "a");
fwrite($ponteiro, "$char");
fclose ($ponteiro);//fecha o arquivo

include "voltando.html";//redireciona para os comentarios

echo "...Atualizado!!!";

?>

</body>

</html>