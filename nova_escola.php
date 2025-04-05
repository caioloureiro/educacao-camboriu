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

<script language=JavaScript>

function desabilitar(){
alert ("Função desabilitada.\n\nDesculpe o incômodo.")
return false
}
document.oncontextmenu=desabilitar
// -->

</script> <!-- Desabilita o botão direito do mouse -->

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
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

</script> <!-- EVITAR SELECIONAR TEXTO-->

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> <!-- Aqui é a Instrução de Compatibilidade -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo "". $_POST["usual"];?></title>

<link href="../../noticia.css" type="text/css" rel="stylesheet"> <!--load o arquivo CSS nesta página-->

<style type="text/css">

#titulo {
margin:30 0 0 290px;
position:absolute;
left:290px;
top:20px;
width:442px;
height:178px;
z-index:3;
text-align:center;
color:#060;
font-size:24px;
}

#titulo_transparente {
	position:absolute;
	width:800px;
	height:315px;
	z-index:1;
	background:url(../../imagens/fundo_titulo.png);
	top: 39px;
}

#fundo_template {
	margin:0 0 0 0px;
	position:absolute;
	z-index:2;
	top: 39px;
}

</style>

<link href='../../imagens/favicon.ico' rel='shortcut icon' type='image/x-icon'/> <!-- Mostra o ícone favicon -->

<!-- COLADO DO SITE http://www.pierrebertet.net/projects/jquery_superbox/ -->
<link rel="stylesheet" href="jquery.superbox.css" type="text/css" media="all" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.superbox-min.js"></script>
<!-- COLADO DO SITE http://www.pierrebertet.net/projects/jquery_superbox/ --> <!-- Chama os arquivos modal -->

<!-- Modelar o Box Modal -->
<script type="text/javascript">

$(function(){

$ ('#conteudo').hide(); // esta div irá desaparecer
$ ('#equipe').hide(); // esta div irá desaparecer
$ ('#historia').hide(); // esta div irá desaparecer
$ ('#patronesse').hide(); // esta div irá desaparecer
$ ('#ppp').hide(); // esta div irá desaparecer
$ ('#projetos').hide(); // esta div irá desaparecer
$ ('#app').hide(); // esta div irá desaparecer
$ ('#pdde').hide(); // esta div irá desaparecer

			$.superbox.settings = {
				closeTxt: "Fechar", // CSS #superbox .close para mudar o "fechar"
				loadTxt: "Carregando...",
				// nextTxt: "Próxima",
				// prevTxt: "Anterior",
				// boxId: "superbox", // Id attribute of the "superbox" element
				// boxClasses: "", // Class of the "superbox" element
				overlayOpacity: .8, // Background opaqueness
				boxWidth: "800", // Default width of the box
				boxHeight: "500", // Default height of the box
				// loadTxt: "Loading...", // Loading text
				// closeTxt: "Close", // "Close" button text
				// prevTxt: "Previous", // "Previous" button text
				// nextTxt: "Next" // "Next" button text


			};
			$.superbox();
		});

</script> <!-- Blog -->
<!-- Modelar o Box Modal --> <!-- Modal -->

<!-- Mudar fundo de Div -->
<script type="text/javascript">

$(document).ready(function(){

	$("#botao_escolas").hover(function() {

		$(this).css("background-color", "#999");

	}, function(){

		$(this).css("background-color", "#CCC");

	});
	
	$("#botao_escolas02").hover(function() {

		$(this).css("background-color", "#999");

	}, function(){

		$(this).css("background-color", "#CCC");

	});

	$("#botao_escolas03").hover(function() {

		$(this).css("background-color", "#999");

	}, function(){

		$(this).css("background-color", "#CCC");

	});

	$("#botao_escolas04").hover(function() {
	
			$(this).css("background-color", "#999");
	
		}, function(){
	
			$(this).css("background-color", "#CCC");
	
		});
	
	$("#botao_escolas05").hover(function() {
	
			$(this).css("background-color", "#999");
	
		}, function(){
	
			$(this).css("background-color", "#CCC");
	
		});
	
	$("#botao_escolas06").hover(function() {
	
			$(this).css("background-color", "#999");
	
		}, function(){
	
			$(this).css("background-color", "#CCC");
	
		});
	
	$("#botao_escolas07").hover(function() {
	
			$(this).css("background-color", "#999");
	
		}, function(){
	
			$(this).css("background-color", "#CCC");
	
		});
	
	$("#botao_escolas08").hover(function() {
	
			$(this).css("background-color", "#999");
	
		}, function(){
	
			$(this).css("background-color", "#CCC");
	
		});
	
	$("#botao_escolas09").hover(function() {
	
			$(this).css("background-color", "#999");
	
		}, function(){
	
			$(this).css("background-color", "#CCC");
	
		});
	
	$("#botao_escolas10").hover(function() {
	
			$(this).css("background-color", "#999");
	
		}, function(){
	
			$(this).css("background-color", "#CCC");
	
		});

});

</script>
<!-- mudar fundo de div -->

<script type='text/javascript'>
<!--
function FecharJanela()
            {
            ww = window.open(window.location, "_self");
            ww.close();
            }
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script> <!-- fechar janela -->

</head>

<body>

<div id=box> <!-- Inicio da div box -->

<div id=cabecalho>

<a href="http://www.cidadedecamboriu.sc.gov.br/" target="_blank">

<img src="../../imagens/link_prefeitura_camboriu.jpg" width="798" height="39" border="0" />

</a>

<div style="width:800px; height:310px;">

<img src="imagens/<?php echo "". $_POST["imagem"];?>.jpg" width="800" height="310">

</div> 
<!-- modificar -->

<div id=fundo_template>
<img src="../../imagens/fundo_template.png" width="800" height="310">
</div>

<div id=titulo_transparente></div>

<div id=titulo><center>
<h1><em><strong>

<?php echo "". $_POST["usual"];?>

</strong></em></h1>
</center></div> <!-- modificar -->

<br>

<a target="_self" href="javascript:FecharJanela()">

<img src="../../imagens/ir_para_o_portal_da_educacao.jpg" width="332" height="23" border="0" longdesc="../index.htm" />

</a>

</div> <!-- Cabeçalho -->

<div id=divsite> <!-- Inicio da div Site -->

<div style="width:100%; height:200px; font-size:13px;">
<strong>
<h3 align="center"><?php echo "". $_POST["completo"];?></h3>
Endereço: <?php echo "". $_POST["endereco"];?><br><br>
Fone Escola: (<?php echo "". $_POST["ddd"];?>) <?php echo "". $_POST["fone01"];?>-<?php echo "". $_POST["fone02"];?><br><br>
Código INEP: <?php echo "". $_POST["inep"];?><br><br>
Email Escola: <?php echo "". $_POST["email"];?><br><br>
CNPJ da Unidade Executora: <?php echo "". $_POST["cnpj01"];?>.<?php echo "". $_POST["cnpj02"];?>.<?php echo "". $_POST["cnpj03"];?>/0001-<?php echo "". $_POST["cnpj04"];?>
</strong>
</div> <!-- Descrição -->

<div id=divbotoes>

<a href="#equipe" rel="superbox[content]">
<div id=botao_escolas>

Equipe

</div>
</a> <!-- botão Equipe -->

<!-- <a href="#historia" rel="superbox[content]">
<div id=botao_escolas02>

História da Escola

</div>
</a> --> <!-- botão História -->

<!-- <a href="#patronesse" rel="superbox[content]">
<div id=botao_escolas03>

Patrono

</div>
</a> --> <!-- botão Patronesse -->

<!-- <a href="#ppp" rel="superbox[content]">
<div id=botao_escolas05>

PPP da Escola

</div>
</a> --> <!-- botão PPP -->

<!-- <a href="#projetos" rel="superbox[content]">
<div id=botao_escolas06>

Projetos

</div>
</a> --> <!-- botão projetos -->

<!-- <a href="#app" rel="superbox[content]">
<div id=botao_escolas07>

APP

</div>
</a> --> <!-- botão APP -->

<div style="margin:4 0 0 0px; padding:0 0 0 2px; background:#CCC; font-size:13px; font-weight:bold;">
    <br>
    <strong>Escreva sua mensagem para a Escola:</strong><br>
    <br>
        Copiar codigo de codigoemail.txt 
  
                  
      </div> <!-- Mensagem para a escola -->

</div> <!-- Coluna Esquerda -->

<div id=divcentral>

<div id=textoescolas>

<img src="../../imagens/paulo_freire.jpg" border="2" title="Paulo Freire" hspace="5" vspace="5" width="185" height="136" align="left" />
<em>

"Escola é o lugar onde se faz amigos. Não se trata só de prédios, salas, quadros, programas, horários, conceitos. Escola é, sobretudo, gente, gente que trabalha, que estuda, que se alegra, se conhece, se estima. O diretor é gente, coordenador é gente, o professor é gente, aluno é gente, cada funcionário é gente. E a escola será cada vez melhor na medida em que cada um se comporte como colega, amigo, irmão. Nada de "ilha cercada de gente por todos os lados". Nada de conviver com as pessoas e depois descobrir que não tem amizade a ninguém nada de ser como o tijolo que forma a parede, indiferente, frio, só. Importante na escola não é só estudar, não é só trabalhar, é também criar laços de amizade, é criar ambiente de camaradagem, é conviver, é se "amarrar nela"! Ora , é lógico, numa escola assim vai ser fácil estudar, trabalhar, crescer, fazer amigos, educar-se, ser feliz."<br>
Paulo Freire

</em>

</div> <!-- Mensagem Paulo Freire -->

<br>

<div id=tabela>
<strong>Número de Alunos no EDUCACENSO:<br><br></strong>
<table style="width:100%; height:100px; border:1px solid; font-size:13px; font-weight:bold;">

<tr> <!-- linha 01 -->

<td align="center" valign="middle" style="border:1px solid">
2008
</td>

<td align="center" valign="middle" style="border:1px solid">
2009
</td>

<td align="center" valign="middle" style="border:1px solid">
2010
</td>

<td align="center" valign="middle" style="border:1px solid">
2011
</td>

</tr>

<tr> <!-- linha 02 -->

<td align="center" valign="middle" style="border:1px solid">
<?php echo "". $_POST["censo2008"];?><br>alunos
</td>

<td align="center" valign="middle" style="border:1px solid">
<?php echo "". $_POST["censo2009"];?><br>alunos
</td>

<td align="center" valign="middle" style="border:1px solid">
<?php echo "". $_POST["censo2010"];?><br>alunos
</td>

<td align="center" valign="middle" style="border:1px solid">
<?php echo "". $_POST["censo2011"];?><br>alunos
</td>

</tr>

</table>
</div> <!-- EDUCACENSO -->

<br>

<div id=tabela>
<strong>Número de Alunos no Sistema EducaWeb:<br><br></strong>
<table style="width:100%; height:100px; border:1px solid; font-size:13px; font-weight:bold;">

<tr> <!-- linha 01 -->

<td align="center" valign="middle" style="border:1px solid">

Dados até <!-- #BeginDate format:En2 -->13-Fev-2012<!-- #EndDate -->
</td>

</tr>

<tr> <!-- linha 02 -->

<td align="center" valign="middle" style="border:1px solid">

<?php echo "". $_POST["educaweb"];?> alunos

</td>

</tr>

</table>
</div> <!-- BETHA -->

<br>

<div style="width:382px;height:180px;border:2px solid;font-size:13px;margin:0 4 0 4px;padding:0 2 0 2px;">
<strong>IDEB da Escola:<br><br></strong>
<table style="width:100%; height:100px; border:1px solid; font-size:13px; font-weight:bold;">

<tr>

<td colspan="4" align="center" valign="middle" style="border:1px solid">
4ª série / 5º ano
</td>

</tr> <!-- linha 01 -->

<tr>

<td align="center" valign="middle" style="border:1px solid">
2005
</td>

<td align="center" valign="middle" style="border:1px solid">
2007
</td>

<td align="center" valign="middle" style="border:1px solid">
2009
</td>

<td align="center" valign="middle" style="border:1px solid">
2011
</td>

</tr> <!-- linha 02 -->

<tr>

<td align="center" valign="middle" style="border:1px solid">

<?php echo "". $_POST["ideb2005"];?>

</td>

<td align="center" valign="middle" style="border:1px solid">

<?php echo "". $_POST["ideb2007"];?>

</td>

<td align="center" valign="middle" style="border:1px solid">

<?php echo "". $_POST["ideb2009"];?>

</td>

<td align="center" valign="middle" style="border:1px solid">

<?php echo "". $_POST["ideb2011"];?>

</td>

</tr> <!-- linha 03 -->

<tr>

<td colspan="3" align="center" valign="middle" style="border:1px solid">

</td>

</tr> <!-- linha 04 -->

<tr>

<td align="center" valign="middle" style="border:1px solid">

</td>

<td align="center" valign="middle" style="border:1px solid">

</td>

<td align="center" valign="middle" style="border:1px solid">

</td>

</tr> <!-- linha 05 -->

<tr>

<td align="center" valign="middle" style="border:1px solid">



</td>

<td align="center" valign="middle" style="border:1px solid">



</td>

<td align="center" valign="middle" style="border:1px solid">



</td>

</tr> <!-- linha 06 -->

</table>
</div> <!-- IDEB -->

</div> <!-- Coluna Central -->

<div id=divlinksuteis>

<!-- <div>

<a href="#conteudo" rel="superbox[content]" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('blog','','../../imagens/blog_on.png',1)">

<img src="../../imagens/blog_off.png" title="Clique aqui para ir ao Blog da Escola" name="blog" width="200" height="68" border="0">

</a>

</div> --> <!-- Botão blog -->

<div style="font-size:12px;" align="center">
<br>
<img src="../../imagens/no_ie_pequeno.png" width="100" height="100" border="0"><br>
<font color="#FF0000">
Está página <strong>não</strong> foi desevolvida para o <strong>Internet Explorer</strong>, por favor utilize outro navegador.
</font>
<br>
<br>
<a href="http://br.mozdev.org/download/" target="_blank">
<img src="../../imagens/firefox_pequeno.png" width="200" height="200" border="0"><br>
Clique aqui para fazer download do Firefox.
</a><br>
<br>
<a href="http://www.google.com/chrome?hl=pt-BR" target="_blank">
<img src="../../imagens/chrome_pequeno.png" width="200" height="200" border="0"><br>
Clique aqui para fazer download do Google Chrome.
</a><br>
<br>

</div> <!-- Aviso do IE -->

</div> <!-- Coluna Direita -->

</div> <!-- fim da div Site -->

<div id=clear>

</div> <!-- Div Clear -->

<div id=conteudo>
<!-- <iframe src ="http://itgcamboriu.blogspot.com/" width="100%" height="100%">

Se quiser escrever algo que não tem escrito no seu site mas vc queira mostrar, escreva nessa área, se não, deixe em branco

</iframe> -->
</div> <!-- Blog modal -->

<div id=equipe style="overflow:auto; font-size:16px; font-weight:bold;">

<h1>Equipe Escolar</h1>

<?php echo "". $_POST["equipe"];?>

</div> <!-- Equipe em página modal -->

<div id=historia style="overflow:auto; font-size:16px; font-weight:bold;">

A Escola foi fundada no dia ...<br>
História da Escola

</div> <!-- historia em página modal -->

<div id=patronesse style="overflow:auto; font-size:16px; font-weight:bold;">

A História da Patronesse

</div> <!-- patronesse em página modal -->

<div id=ppp style="overflow:auto; font-size:16px; font-weight:bold;">

PPP da Escola

</div> <!-- PPP em página modal -->

<div id=app style="overflow:auto; font-size:16px; font-weight:bold;">

Equipe da Associação de Pais e Professores

</div> <!-- APP em página modal -->

<div id=projetos style="overflow:auto; font-size:16px; font-weight:bold;">

<h3>Projetos da Escola</h3>

<p>Recreio na Escola</p>

<p>Projeto Leitura</p>

<p>Projeto Açoriano</p>

<p>Projeto Preservação do Rio Camboriú</p>

</div> <!-- Projetos em página modal -->

</div> <!-- Fim da div box -->

<div id=rodape></div> <!-- rodape -->
</body>

</html>

</textarea>
<br>
<h3>Colar este texto no dreamweaver e salvar dentro da pasta noticia.</h3>
</div>
</center>
</body>
</html>