<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title>Bienvenue sur mon CV !</title>
		
		<meta charset="utf-8">
		<meta name="description" content="Je présente ici mon CV crée dans le cadre de la formation CODA by Simplon">
		<meta name="keywords" content="developer,web,dev,développeur,CSS,HTML,JS,PHP,simplon,coda,codeur,internet,informatique">
		
		<link rel="stylesheet" type="text/css" href="css/apparence.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		
		<!--<script type="text/javascript" src="js/jspur.js" ></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		
	
	</head>
	<body>
		<main>
			<header>
				
				<h1 id="grandTitre"><a id="boutonreset" href="#">Nabil Ghedjati</a></h1>
				<!--<h2 id="petitTitre">Bienvenue !</h2>-->


				<nav>
					<ul id="navbar">
						<li><a id="bouton1" href="#">Expérience</a></li>
						<li><a id="bouton2" href="#">Formation</a></li>
						<li><a id="bouton3" href="#">À propos</a></li>
						<li><a id="bouton4" href="#">Contact</a></li>
					</ul>
				</nav>
			</header>


			<section id="one">			
				<h2><a id="link1" href="#">Expérience professionnelle</a></h2>

				<ul id="list1">
					<li>
						<span class="time">Juillet 2014</span> : Auxiliaire d'été 
						<div>Société Générale, agence de Thiers</div>
					</li>

					<li>
						<span class="time">Années scolaires 2012/2014</span>Stagiaire (pendant 17 semaines non consécutives)
						<div>Caisse d'Épargne Auvergne-Limousin, agence de Thiers</div>
						<div> Société Générale, agence de Beaumont</div>
						<div> Société Générale, agence de Thiers</div>
					</li>

					<li>
						<span class="time">Été 2012</span> : Manutentionnaire (par intérim)
						<div>Brüggen France (céréales)</div>
					</li>

					<li>
						<span class="time">Été 2009/été 2010</span> : Agent d'entretien 
						<div>La Rayonnante (services d'entretien)</div>
					</li>

				</ul>

			</section>

				

			<section id="two">
					<h2><a id="link2" href="#">Diplômes et formation</a></h2>

					<ul id="list2">
						<li>
						<span class="time">2016/2017 </span> : Formation Coda by Simplon
						</br>AFPA, Alès
						</li>

						<li>
						<span class="time">2014/2015 </span> : Licence Professionnelle Management des collectivités
						territoriales (formation uniquement)
						</br>Université d'Auvergne, CLERMONT-FERRAND
						</li>

						<li>
						<span class="time">2012/2014</span> : BTS Banque Option Marché des Particuliers, en formation initiale
						</br>Lycée Ambroise Brugière, CLERMONT-FERRAND
						</li>

						<li>
						<span class="time">2008/2010</span> : Baccalauréat Sciences et Technologies de la Gestion spécialité
						Comptabilité et Finance d'entreprise
						</br>Lycée Montdory, THIERS
						</li>

					</ul>
			</section>




			<section id="three">

					<h2><a id="link3" href="#">Informations complémentaires</a></h2>

					<ul id="list3">
						<li>
							Langues : Anglais (bon niveau oral et écrit)
						</li>

						<li>
							Outils informatiques (Word/Excel/Access/Gimp) : intermédiaire
						</li>
					</ul>
			
			
				
			

						<h2><a id="link4" href="#">Renseignements personnels</a></h2>

						<ul id="list4">
							<li>
								Centres d'intérêts: Cinéma, nouvelles technologies, sports de montagne, tennis, photographie, musique
							</li>
						</ul>

						<p>© <?php echo date("Y"); ?> Nabil Ghedjati</p>

			</section>

			

				<section id="four">
						<h3><a id="link5" href="#">Contact</a></h3>
						
						<form id="form" name="contactform" action="contact.php" accept-charset="UTF-8" method="POST" onsubmit="return verifForm(this)" > <!-- La fonction onsubmit permet d'envoyer le formulaire uniquement si on renvoit true. C'est ici la fonction verifForm qui se charge de dire true ou false. -->
						
						<label for="name">Votre nom</label></td>
						<input type="text" id="name" name="name" onblur="verifNom(this)" >
						
						
						<label for="mailaddress">Votre adresse e-mail</label>
						<input type="email" id="mailaddress" name="mailaddress" onblur="verifMail(this)" >
						
						
						<label for="message">Votre message</label></td>
						<textarea id="message" type="text" name="message" rows="6" onblur="verifMsg(this)" ></textarea>
						
						<button id="sendbutton" type="submit" name="send">Envoyer</button>
					</form>
				</section>

			


		</main>

	<script type="text/javascript" >
		

		//Utilisation de JS pur


//Création d'une fonction qui permettra de colorier les champs du formulaire non ou mal remplis
	//si erreur vaut true,on colorise l'arrière-plan du champ concerné entré en parametre en rouge
function surligne(champ, erreur)
{
	if(erreur) 
	{
		champ.style.backgroundColor = "rgba (255,8,8,0.25)";
	}
	else{
		champ.style.backgroundColor = "";
	}
}


//Création d'une fonction qui permet de vérifier la longueur du nom de l'utilisateur
	// Si la longueur de la donnée du champ nom est inférieur à 2 caractères ou supérieur à 50
function verifNom(champ)
{
	if(champ.value.length < 2 || champ.value.length > 50)
	{
		surligne(champ,true); //j'exécute alors la fonction qui s'appliquera au champ concerné et retournera faux.
		return false;
	}
	else
	{
		surligne(champ,false);
		return true;
	}
}


//Création d'une fonction qui permet de vérifier que l'adresse e-mail satisfait bien le REGEX de vérification e-mail
function verifMail(champ)
{
	//Création du regex e-mail
	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	if(!regex.test(champ.value)) //Avec la fonction test appliqué au regex sur la valeur du champ (en parametre), je vérifie que la valeur du champ respecte le regex. Dans ce cas précis, je vérifie s'il ne le respecte pas avec "!" (différent de).
	{
		surligne(champ, true);
		return false;
	}
	else
	{
		surligne(champ, false);
		return true;
	}

}


//Création d'une fonction qui permet de vérifier que le texte du message soit compris entre 2 et 1500 caractères.
function verifMsg(champ)
{
	if(champ.value.length <2 || champ.value.length >1500)
	{
		surligne(champ,true); 	// Si la longueur de la donnée du champ nom est inférieur à 2 caractères ou supérieur à 1500
		return false;
	}
	else
	{
		surligne(champ,false);
		return true;
	}
}


//Création d'une grande fonction qui vérifie que toutes les autres fonctions de vérification renvoient bien true, afin de valider le formulaire.
function verifForm(f) //le paramètre f, sera remplacé à l'exécution par le mot-clé this, qui permettra de séléctionner le bon champ du formulaire et l'appliquer à la bonne formule.
{
	var nomOk = verifNom(f.nom); // On exécute chaque fonction de vérif et on enregistre le résultat (true ou false) dans des variables.
	var mailOk = verifMail(f.mailaddress); 
	var msgOk = verifMsg(f.message);

	//On vérifie ensuite que toutes ces fonctions ont renvoyé true
	if(nomOk && mailOk && msgOk)
	{
		return true;
	}
	else
	{
		alert("Veuillez remplir correctement tous les champs.");
	}
}



	</script>
	</body>
</html>
