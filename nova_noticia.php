<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Atualização</title>
</head>

<body style="margin:0 auto; background:url(imagens/camboriu.jpg) fixed no-repeat;">
<center>
<div style="width:1000px; height:650px; background:url(imagens/fundo_titulo.png);" action="atualizar.php" method="post">
Código:<br>
<textarea onclick="this.select();" onMouseOver="this.select();" name="" cols="100" rows="35">

<html>

<head>

<link href='../imagens/favicon.ico' rel='shortcut icon' type='image/x-icon'/> <!-- Mostra o ícone favicon -->

<script language=JavaScript> <!-- Desabilita o botão direito do mouse -->
function desabilitar(){
    alert ("Função desabilitada.\n\nDesculpe o incômodo.")
    return false
}
document.oncontextmenu=desabilitar
// -->
</script>

<!-- EVITAR SELECIONAR TEXTO--> 
<script type="text/javascript"> 
// IE Evitar seleccion de texto
document.onselectstart=function(){
if (event.srcElement.type != "text" && event.srcElement.type != "textarea" && event.srcElement.type != "password")
return false
else return true;
};
// FIREFOX Evitar seleccion de texto
if (window.sidebar){
document.onmousedown=function(e){
var obj=e.target;
if (obj.tagName.toUpperCase() == "INPUT" || obj.tagName.toUpperCase() == "TEXTAREA" || obj.tagName.toUpperCase() == "PASSWORD")
return true;
/*else if (obj.tagName=="BUTTON"){
return true;
}*/
else
return false;
}
}
// End -->
</script> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Notícias</title>

<link href="../noticia.css" type="text/css" rel="stylesheet"> <!--load o arquivo CSS nesta página-->

<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>

<!-- fechar janela -->
<script language="javascript" src="funcao.js"></script>

<script type='text/javascript'>
            <!--
            function FecharJanela()
            {
            ww = window.open(window.location, "_self");
            ww.close();
            }
            -->
</script>
<!-- fechar janela -->


<style type="text/css">
#apDiv1 {
	position:absolute;
	left:870px;
	top:806px;
	width:133px;
	height:49px;
	z-index:1;
}

</style>
</head>

<body>
<div id=box>

<div id=cabecalho> <a href="http://www.cidadedecamboriu.sc.gov.br/" target="_blank"><img src="../imagens/link_prefeitura_camboriu.jpg" width="798" height="39" border="0" /></a>
    <br />
    
    <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="265">
      <param name="movie" value="../imagens/fundocima.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />

      <param name="swfversion" value="6.0.65.0" />
      <!-- Esta tag param solicita que os usuários com o Flash Player 6.0 r65 e versões posteriores baixem a versão mais recente do Flash Player. Exclua-o se você não deseja que os usuários vejam o prompt. -->
      <param name="expressinstall" value="../Scripts/expressInstall.swf" />
      <!-- A tag object a seguir aplica-se a navegadores que não sejam o IE. Portanto, oculte-a do IE usando o IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="../imagens/fundocima.swf" width="800" height="265">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />

        <param name="swfversion" value="6.0.65.0" />
        <param name="expressinstall" value="../Scripts/expressInstall.swf" />
        <!-- O navegador exibe o seguinte conteúdo alternativo para usuários que tenham o Flash Player 6.0 e versões anteriores. -->
        <div>
          <h4>O conteúdo desta página requer uma versão mais recente do Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obter Adobe Flash player" width="112" height="33" /></a></p>
        </div>
        <!--[if !IE]>-->

      </object>
      <!--<![endif]-->
    </object>
    <br>
    <br>
    <br>
    <a href="javascript:FecharJanela()"><img src="../imagens/pagina01.jpg" width="160" height="18" border="0" longdesc="../index.htm" /></a>
  
  </div>
    

<div id=divtitulo>
	
<?php echo "". $_POST["titulo"];?>
    
</div> <!-- TITULO -->

<div id=divpostadoem>
<strong>Camboriú, <?php


$dia_num = date("w");// Mostra o Dia da Semana (Dia da semana em número. Ex.: 0 =&gt; Sunday, 1 =&gt; Monday)
$dia_port = $dia_num;// Atribuição de variáveis
if($dia_port == 0){
print("domingo");
}elseif($dia_port == 1){
print("segunda-feira");
}elseif($dia_port == 2){
print("terça-feira");
}elseif($dia_port == 3){
print("quarta-feira");
}elseif($dia_port == 4){
print("quinta-feira");
}elseif($dia_port == 5){
print("sexta-feira");
}else{
print("sábado");
}

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
</div> <!-- POSTADO EM - FIXO -->

<div id=divfoto>
    

<img src="../imagens/slider/<?php echo "". $_POST["imagem"];?>.jpg" />

</div> <!-- FOTO -->

<div id=divdescricao>

<?php echo "". $_POST["texto"];?>

</div> <!-- TEXTO -->

</div>

<div id=rodape>
    
</div>

<script type="text/javascript">
swfobject.registerObject("FlashID");

</script>
</body>

</html>

</textarea>
<br>
<h3>Colar este texto no dreamweaver e salvar dentro da pasta noticia.</h3>
</div>
</center>
</body>
</html>