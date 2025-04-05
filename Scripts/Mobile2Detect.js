// Indentifica o User Agent do navegador cliente
// AAA - Out 09

var ua = navigator.userAgent.toLowerCase();

var uMobile = '';


// === REDIRECIONAMENTO PARA iPhone, Windows Phone, Android, NokiaE71 etc. ===

// Lista de substrings a procurar para ser identificado como mobile WAP
uMobile = '';
uMobile += 'iphone;ipod;windows phone;android;iemobile 8;nokiae71';

// Sapara os itens individualmente em um array
v_uMobile = uMobile.split(';');
//alert(window.location.href.slice(window.location.href.indexOf('?') + 1).split('&'));

//alert(window.location.href.slice(window.location.href.indexOf('?',0)+1));
// percorre todos os itens verificando se eh mobile
var boolMovel = false;
for (i=0;i<=v_uMobile.length;i++)
{
	if ((ua.indexOf(v_uMobile[i]) != -1) && window.location.href.slice(window.location.href.indexOf('?') + 1).split('&') != 'vip=1')
	{
		boolMovel = true;
	}
}

if (boolMovel == true)
	{
		location.href='http://www.educacao.cidadedecamboriu.sc.gov.br/touch.html';
 //AQUI DEFINE A PÁGINA PARA BROWSERS DE TELEFONE MÓVEIS COMO BLACKBERRY, IPHONE, WINDOWS MOBILE, ETC. (3G)
	}

// ===================================================================





// === REDIRECIONAMENTO PARA O WAP ===================================

// Lista de substrings a procurar para ser identificado como mobile WAP
uMobile = '';
uMobile += 'playstation;wap;windows ce;Windows phone;iemobile;';
uMobile += 'series60;symbian;series60;series70;series80;series90;';
uMobile += 'blackberry;midp;wml;brew;palm;xiino;blazer;pda;nitro;netfront;';
uMobile += 'sonyericsson;ericsson;sec-sgh;docomo;kddi;vodafone;mot;sony';

// Sapara os itens individualmente em um array
v_uMobile = uMobile.split(';');

// percorre todos os itens verificando se eh mobile
var boolMovel = false;
for (i=0;i<=v_uMobile.length;i++)
{
	if (ua.indexOf(v_uMobile[i]) != -1)
	{
		boolMovel = true;
	}
}

if (boolMovel == true)
	{

location.href='http://www.educacao.cidadedecamboriu.sc.gov.br/movel.html';
//ESTE REDIRECIONA PARA CELULARES MAIS SIMPLES 2G (obs. Modelos Antigos, que fazem o acesso 2g com páginas simples no conteúdo!

	}