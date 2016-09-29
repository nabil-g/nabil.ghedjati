// Utilisation de jQuery

$(document).ready(function(){
	//on utilise son code jquery une fois que son document est chargé

	//PREMIERE PARTIE : CACHER ET FAIRE APPARAITRE LE CONTENU DE CHAQUE TITRE

	//Je cache d'abord par défaut toutes mes listes
	$('ul:not(#navbar),p').hide();


	$('#link1').click(function() {
		$('#list1').slideToggle('fast');
	});
	$('#link2').click(function() {
		$('#list2').slideToggle('fast');
	});
	$('#link3').click(function() {
		$('#list3').slideToggle('fast');
	});
	$('#link4').click(function() {
		$('#list4').slideToggle('fast');
	});
	$('#link5').click(function() {
		$('#list5').slideToggle('fast');
	});




});