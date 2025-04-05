//Inicialização da página...
$(document).ready( function(){
	ativaEfeitoOver();
	initMenus();
	ativaFormulario();
	ativaLightbox();
	ativaSlider();
});
swfobject.registerObject("flashTopo");

function ativaSlider() {
	$('.anythingSlider').anythingSlider({
		easing: "easeInOutExpo",        // Anything other than "linear" or "swing" requires the easing plugin
		autoPlay: true,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not.
		delay: 5000,                    // How long between slide transitions in AutoPlay mode
		startStopped: false,            // If autoPlay is on, this can force it to start stopped
		animationTime: 2050,             // How long the slide transition takes
		hashTags: true,                 // Should links change the hashtag in the URL?
		buildNavigation: true,          // If true, builds and list of anchor links to link to each slide
		pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
		startText: "Go",             // Start text
		stopText: "Stop",               // Stop text
		navigationFormatter: formatText       // Details at the top of the file on this use (advanced use)
	});

	$("#slide-jump").click(function(){
		$('.anythingSlider').anythingSlider(4);
	});
}

function formatText(index, panel) {
	return index + "";
}


function carregaTela(secao) {
	switch(secao) {
		case "cidade":
			document.location = 'cidade.php';
			break;
		case "turista":
			document.location = 'vazio.php';
			break;
		case "investidor":
			document.location = 'vazio.php';
			break;
		case "estudante":
			document.location = 'vazio.php';
			break;
		case "servidor":
			document.location = 'vazio.php';
			break;
		case "imprensa":
			document.location = 'vazio.php';
			break;
		case "index":
			document.location = 'index.php';
			break;
	}
}

function ativaEfeitoOver() {
	// set opacity to nill on page load
	$("img.rollover2").css("opacity","1");
	// on mouse over
	$("img.rollover2").hover(function () {
		// animate opacity to full
		$(this).stop().animate({
			opacity: 0.7
		}, "fast");
	},
	// on mouse out
	function () {
		$(this).stop().animate({
			opacity: 1
		}, "fast");
	});	
	
}	
function initMenus() {
	$('ul.menu ul').hide();
	$.each($('ul.menu'), function(){
		$('#' + this.id + '.expandfirst ul:first').show();
		$('#' + this.id + ' ul.opened').show();
	});
	$('ul.menu li a.principal').click(
		function() {
			var checkElement = $(this).next();
			var parent = this.parentNode.parentNode.id;
			var brother = parent.NextSib

			if($('#' + parent).hasClass('noaccordion')) {
				$(this).next().slideUp('normal');
				return false;
			}
			if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
				$('#' + parent + ' ul').slideUp('normal');
				return false;
			}
			if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
				$('#' + parent + ' ul:visible').slideDown('normal');
				$('#' + parent + ' ul').slideUp('normal');
				checkElement.slideDown('normal');
				return false;
			} 
			
		}
	);		

}	
function ativaFormulario() {
	validaFormulario("formulario_newsletter",'formulario_newsletter-envio');
	validaFormulario("formulario_enquete",'formulario_enquete-envio');
	validaFormulario('contato','');
	validaFormulario('form_busca_noflash','');
}

function ativaLightbox(){
	$('#gallery a').lightBox();
}
	