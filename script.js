// Utilisation de jQuery

$(document).ready(function(){
	//on utilise son code jquery une fois que son document est chargé

	//PREMIERE PARTIE : CACHER ET FAIRE APPARAITRE LE CONTENU DE CHAQUE TITRE

	//Je cache d'abord par défaut toutes mes listes
	$('ul:not(#navbar),p').hide();


	$('#link1').hover(function() {
		$('#list1').slideToggle('fast');
	});
	$('#link2').hover(function() {
		$('#list2').slideToggle('fast');
	});
	$('#link3').hover(function() {
		$('#list3').slideToggle('fast');
	});
	$('#link4').hover(function() {
		$('#list4').slideToggle('fast');
	});
	$('#link5').hover(function() {
		$('#list5').slideToggle('fast');
	});


	//SECONDE PARTIE : MENU DE NAVIGATION

	//On cache toutes les sections par défaut
	$('section').hide();



	$('#bouton1').click(function(){
		$('section').hide();
		$('#one').fadeIn('fast');
	});

	$('#bouton2').click(function(){
		$('section').hide();
		$('#two').fadeIn('fast');
	});

	$('#bouton3').click(function(){
		$('section').hide();
		$('#three,#four').fadeIn('fast');
	});

	$('#bouton4').click(function(){
		$('section').hide();
		$('#five').fadeIn('fast');
	});

	//On se sert du titre pour faire un reset et re tout cacher.
	$('#boutonreset').click(function(){
		$('section').fadeOut('slow');
	});



});