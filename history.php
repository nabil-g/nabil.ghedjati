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
		<script type="text/javascript" src="js/scriptcontact.js"></script>
		<script type="text/javascript" src="js/script_histo.js">

		</script>
	</head>
	<body>
		<main>
			<header>
				<h1 id="grandTitre"><a id="boutonreset" href="index.php">Nabil Ghedjati</a></h1>
			</header>



			<section id="field">

			<form action="#">
				<label for="nomauteur">Rechercher par auteur</label>
				<input type="text" name="nomauteur" <?php echo 'value="'. $_GET['nomauteur'] .'"'; ?>  autofocus>
				<button id="searchbtn" type="submit">Rechercher</button>
			</form>
			<?php
				//Connexion à la base de données.
				include('php/db.php');






								//LECTURE DE DONNEES DANS LA BASE DE DONNEES

								//On prépare la requete (afin d'eviter des injections SQL).
								$req = $bdd_cv->prepare('SELECT ID, nom, mail, message, date, time FROM messages');

								//On exécute la requete avec les variables "nettoyées" des éventuelles injections SQL.
								$req->execute(array());

								//On utilise une boucle pr lister tous les elements de la table (je les intègre en même temps dans un tableau HTML)
								echo '<table id="tabhisto"><tr><th>N°</th><th>Nom</th><th>Adresse e-mail</th><th>Date</th><th>Heure</th><th>Message</th></tr>';
								while ($donnees = $req->fetch()) {
									echo "<tr><td>" . $donnees['ID']."</td><td>". $donnees['nom'] . "</td><td>" . $donnees['mail'] . "</td><td>" . $donnees['date'] ."</td><td>".$donnees['time']. "</td><td>" . $donnees['message'] . "</td></tr>" ;
								}
								echo "</table>";


								$req->closeCursor();








			?>


			</section>




		</main>
	</body>
</html>
