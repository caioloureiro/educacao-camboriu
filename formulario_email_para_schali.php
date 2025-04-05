<?php

$email = "caio.loureiro@hotmail.com";//Você digita um e-mail válido
$para = "caio.loureiro@hotmail.com"; //Aqui para quem vai o e-mail

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8895-1\r\n";
$headers .= "From:".$email."<".$email.">\r\n";

$msag = "Está funcionando o envio.<br>";

if (mail($para, "Teste de envio de e-mail" , $mensagem , $headers)){
echo "O e-mail foi enviado com sucesso!";
}else{
echo "Problema para enviar o e-mail";
}
?> 

<?

// Coloque a mensagem que irá ser enviada para seu e-mail abaixo:
$msg = "Mensagem enviada em ".date("d/m/Y").", os dados seguem abaixo: ";
while(list($campo, $valor) = each($HTTP_POST_VARS)) {
  $msg .= ucwords($campo).": ".$valor." ";
}

// Agora iremos fazer com que o PHP envie os dados do Formulário para seu e-mail:
mail("caio.loureiro@hotmail.com", "Portal da Educacao",$msg,"From: $REMOTE_ADDR");
echo "Seu e-mail foi enviado com sucesso. Obrigado!";
?>
