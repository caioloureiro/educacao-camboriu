<?
/* Defina aqui o tamanho máximo do arquivo em bytes: */
if($arquivo_size > 1024000) {
print "<SCRIPT> alert('Seu arquivo não poderá ser maior que 1mb'); window.history.go(-1); </SCRIPT>\n";
exit;
}

/* Defina aqui o diretório destino do upload */
if (!empty($arquivo) and is_file($arquivo)) {
$caminho="arquivos_recebidos";
$caminho=$caminho.$arquivo_name;
unlink("/home/httpd/html/cidadedecamboriu.sc.gov.br/educacao/departamentos/departamento_prestacao_de_contas/arquivos_recebidos");


/* Defina aqui o tipo de arquivo suportado */
if ((eregi(".gif$", $arquivo_name)) || (eregi(".jpg$", $arquivo_name)) || (eregi(".xls$", $arquivo_name)) || (eregi(".doc$", $arquivo_name)) || (eregi(".pdf$", $arquivo_name)) || (eregi(".docx$", $arquivo_name)) || (eregi(".xlsx$", $arquivo_name))){
copy($arquivo,$caminho);
print "<h1><center>Arquivo enviado com sucesso!</center></h1>";
}
else{
print "<h1><center>Arquivo não enviado!</center></h1>";
print "<h2><font color='#FF0000'><center>Caminho ou nome de arquivo Inválido!</center></font></h2>";
}
}
?>
