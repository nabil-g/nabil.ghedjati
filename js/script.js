// Utilisation de jQuery

$(document).ready(function(){  //on utilise son code jquery une fois que son document est chargé

	//On cache toutes les sections par défaut
	$('section').hide();

	//j'enregistre la visibilité de l'element dans une variable, qui vaut true si l'element est visible, faux s'il ne l'est pas.
	/*var visibiliteSection = $('section').is(:visible);

	//PREMIERE PARTIE :

	/*if(!visibiliteSection) {
		$('#boutonreset').hover(function(){
			$('#petitTitre').fadeToggle('fast');
		});

	}*/

	$('#boutonreset').click(function(){
		// $('#petitTitre').fadeIn('fast').delay(1000).fadeOut('fast');
		$('header h1').animate({fontSize: '40px', margin: '50px'},'slow', function(){
			$('section').hide();
			$('nav ul li a').removeClass("actif");
			$("#bouton1").addClass("actif");
			$('nav,#one').fadeIn('slow');
		});
		$('header h1').removeClass('grandTitre1');
		$('header h1').addClass('grandTitre2');



	});


	//MENU DE NAVIGATION

	$('#bouton1').click(function(){
		$('section').hide();
		$('#one').fadeIn('fast');
		$('nav ul li a').removeClass("actif");
		$("#bouton1").addClass("actif");
	});

	$('#bouton2').click(function(){
		$('section').hide();
		$('#two').fadeIn('fast');
		$('nav ul li a').removeClass("actif");
		$("#bouton2").addClass("actif");
	});

	$('#bouton3').click(function(){
		$('section').hide();
		$('#three').fadeIn('fast');
		$('nav ul li a').removeClass("actif");
		$("#bouton3").addClass("actif");
	});

	$('#bouton4').click(function(){
		$('section').hide();
		$('#four').fadeIn('fast');
		$('nav ul li a').removeClass("actif");
		$("#bouton4").addClass("actif");
	});













});
