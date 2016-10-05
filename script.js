// Utilisation de jQuery

$(document).ready(function(){
	//on utilise son code jquery une fois que son document est chargé

	//PREMIERE PARTIE : CACHER ET FAIRE APPARAITRE LE CONTENU DE CHAQUE TITRE

	

	$('#boutonreset').click(function(){
		$('#grandTitre').animate({fontSize: '40px'}, function(){
			$('#grandTitre').animate({marginTop:'50px'}, function(){
				$("#bouton1").addClass("actif");
				$('nav,#one').fadeIn('slow');

			});
		});
		
	});



	/*
	//Je cache d'abord par défaut toutes mes listes
	$('ul:not(#navbar),p').hide();


	$('#one').hover(function() {
		$('#list1').slideToggle('fast');
	});
	$('#two').hover(function() {
		$('#list2').slideToggle('fast');
	});
	$('#three').hover(function() {
		$('#list3').slideToggle('fast');
	});
	$('#four').hover(function() {
		$('#list4,#list5').slideToggle('fast');
	});


	*/

	//SECONDE PARTIE : MENU DE NAVIGATION

	//On cache toutes les sections par défaut
	$('section').hide();




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