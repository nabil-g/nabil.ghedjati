<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title>Historique des messages</title>
		<meta charset="utf-8">
		<meta name="description" content="Je présente ici mon CV crée dans le cadre de la formation CODA by Simplon">
		<meta name="keywords" content="developer,web,dev,développeur,CSS,HTML,JS,PHP,simplon,coda,codeur,internet,informatique">
		<link rel="stylesheet" type="text/css" href="css/apparence.css">
		<link rel="stylesheet" type="text/css" href="css/apparence_contact.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	</head>
	<body>
		<main>
			<header>
				<h1 id="grandTitre"><a id="boutonreset" href="index.php">Nabil Ghedjati</a></h1>
			</header>



			<section id="field">

				<form id="monform" action="#">
					<label for="nomauteur">Rechercher par auteur</label>
					<input type="text" name="nomauteur" id="champ" placeholder="Rechercher" onkeyup="search()" autocomplete="off" autofocus>
					<!-- <button id="searchbtn" type="submit">Rechercher</button> -->
				</form>

			</section>

			<div id="tab">

			</div>



		</main>

		<script type="text/javascript">

			function search() {
				event.preventDefault();
		   	var nom = $('#champ').val();

		     $.ajax({
		       method: 'POST', // On indique le type de requete http
		       url: 'php/search.php', // l'adresse de la page de réception
		       data: {
						 nomauteur : '%' + nom + '%' // pour la recherche dynamique en sql il faut préalablement envoyer le contenu du champ entouré du symbole %
					 },
		       success: function(data) { // en cas de succés
		        console.log(nom.length);
						if (nom.length > 0) { // si le contenu champ est inférieur à 1,
							if (data.length > 0) {
								$('#tab').html('<table id="tabhisto"><tr><th>N°</th><th>Nom</th><th>Adresse e-mail</th><th>Date</th><th>Heure</th><th>Message</th></tr></table>');
								$('#tabhisto').append(data);
							}
							else {
								$('#tab').html("<h2>Aucun résultat</h2>");
							}
						} else {
							$('#tab').html(""); // on supprime le contenu de la div
						}

		       },
		       error: function(){ // en cas d'erreur

		       alert('La requête n\'a pas aboutie !');
		       }
			  	});
			}


		</script>
	</body>
</html>
