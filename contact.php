<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title>Bienvenue sur mon CV !</title>
		<meta charset="utf-8">
		<meta name="description" content="Je présente ici mon CV crée dans le cadre de la formation CODA by Simplon">
		<meta name="keywords" content="developer,web,dev,développeur,CSS,HTML,JS,PHP,simplon,coda,codeur,internet,informatique">
		<link rel="stylesheet" type="text/css" href="css/apparence.css">
		<link rel="stylesheet" type="text/css" href="css/apparence_contact.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/scriptcontact.js"></script>
	</head>
	<body>
		<main>
			<header>
				<h1 id="grandTitre"><a id="boutonreset" href="index.php">Nabil Ghedjati</a></h1>
			</header>



			<section id="msgbox">			
			

			<?php
				//Connexion à la base de données.
				include('php/db.php');


				//RECUPERATION DES DONNEES DU FORMULAIRE DE CONTACT
							// Pour info :
							// La fonction strip_tags permet d'effacer les balises HTML qui pourraient être injectés par l'utilisateur.
							// Le suffixe us qui termine les variables résultant d'un formulaire me permet de les distinguer des autres variables (user string).

							// On teste la présence de ces variables envoyées via le formulaire
							if(isset($_POST['nom']) AND isset($_POST['mailaddress']) AND isset($_POST['message']) AND !empty($_POST['nom']) AND !empty($_POST['mailaddress']) AND !empty($_POST['message'])) {
								//On supprime les potentielles balises HTML et on enregistre les variables du formulaire dans d'autres variables, plus lisibles.
								$name_us = strip_tags($_POST['nom']);
								$address_us = strip_tags($_POST['mailaddress']);
								$msg_us = strip_tags($_POST['message']);


								//ENREGISTREMENT DES DONNEES DANS LA BASE DE DONNEES

								//On prépare la requete d'insertion avant de lui insérer les variables de l'utilisateur (afin d'eviter des injections SQL).
								$req = $bdd_cv->prepare('INSERT INTO messages(nom, mail, message, date) 
									VALUES(:nom, :mail, :message, :date)');

								//On exécute la requete avec les variables "nettoyées" des éventuelles injections SQL.
								$req->execute(array(
									'nom' => $name_us, 
									'mail' => $address_us, 
									'message' => $msg_us, 
									'date' => date("Y-m-d H:i:s"),
									));

								// On affiche un message.
								echo "Merci pour votre message $name_us !</br></br>";
								echo "<a href='index.php'> < Retour</a>";
							}
							else{
								// S'il n'y a pas de variables de formulaire, on affiche un message d'erreur.
								echo "Vous n'avez pas renseigné votre nom, votre adresse e-mail ou votre message !</br></br>";
								echo "<a href='index.php'> < Retour</a>";
							}





			?>


			</section>

			


		</main>
	</body>
</html>
