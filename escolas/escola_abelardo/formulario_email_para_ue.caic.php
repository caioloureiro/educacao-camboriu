<?

// Coloque a mensagem que irá ser enviada para seu e-mail abaixo:
$msg = "Mensagem enviada em ".date("d/m/Y").", os dados seguem abaixo:\r\n ";
while(list($campo, $valor) = each($HTTP_POST_VARS)) {
$msg .= ucwords($campo).":\r\n".$valor."\r\n";
}

// Agora iremos fazer com que o PHP envie os dados do Formulário para seu e-mail:
mail("ue.caic@cidadedecamboriu.sc.gov.br", "Portal da Educacao",$msg,"From: $REMOTE_ADDR");
echo "Seu e-mail foi enviado com sucesso. Obrigado!";
?>
