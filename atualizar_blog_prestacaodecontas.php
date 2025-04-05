<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Atualizando...</title>

</head>

<body>

<?php
// 4 passos para atualizar o arquivo com classificação por data (de baixo para cima): Copiar, Limpar, Adicionar Mensagem e Colar

// 1º passo: Copiar todo o arquivo atraves do comando fgetc - Função R: Ponteiro no inicio e ler o arquivo
$ponteiro = fopen ("prestacaodecontas_blog.html", "r");
while (!feof($ponteiro)){
    $char .= fgetc($ponteiro);
} 
fclose ($ponteiro);

// 2º passo: Limpar todo o arquivo deixando-o em branco - Função W: Limpar o arquivo
$ponteiro = fopen ("prestacaodecontas_blog.html", "w");
fwrite($ponteiro, "");
fclose ($ponteiro);

// 3º passo: Colar a mensagem enviada pelo formulário - Função A: Ponteiro no final e adicionar dados
$mensagem      = $_POST["texto"];
$msg .= "
<table border='1' width='760px' background='imagens/fundo_titulo.png'>
<tr>
<td style='font-size:20px; text-align:center'>
$mensagem
</td>
</tr>
";
$msg .= "</table>";
$ponteiro = fopen ("prestacaodecontas_blog.html", "a");
fwrite($ponteiro, "$msg");
fclose ($ponteiro);

// 4º passo: Colar o arquivo copiado no inicio - Função A: Ponteiro no final e adicionar dados
$ponteiro = fopen ("prestacaodecontas_blog.html", "a");
fwrite($ponteiro, "$char");
fclose ($ponteiro);

include "voltando.html"; // Chama o arquivo para voltar a página de formulário

echo "...Atualizado!!!"; // Mostra o resultado final

?>

</body>

</html>