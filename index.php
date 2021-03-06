<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title>Bienvenue sur mon CV !</title>

		<meta charset="utf-8">
		<meta name="description" content="Je présente ici mon CV crée dans le cadre de la formation CODA by Simplon">
		<meta name="keywords" content="developer,web,dev,développeur,CSS,HTML,JS,PHP,simplon,coda,codeur,internet,informatique">
		<meta name="viewport" content="width=device-width, initial-scale=1", user-scalable=no>

		<link rel="stylesheet" type="text/css" href="css/apparence.css">
		<link rel="stylesheet" href="css/mobile.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://weloveiconfonts.com/api/?family=entypo">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

		<script type="text/javascript" src="js/jspur.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>


	</head>
	<body>
		<main>
			<header>

				<h1 class="grandTitre1"><a id="boutonreset" href="#">Nabil Ghedjati</a></h1>
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


						<form id="form" action="contact.php" accept-charset="UTF-8" method="POST" onsubmit="return verifForm(this)" > <!-- La fonction onsubmit permet d'envoyer le formulaire uniquement si on renvoit true. C'est ici la fonction verifForm qui se charge de dire true ou false. -->

						<label id="erreurForm">Veuillez remplir correctement tous les champs.</label>

						<label for="nom">Votre nom    <span id="checkNom" class="entypo-check"></span></label>
						<input type="text" id="nom" name="nom" onblur="verifNom(this)">
						<label id="erreurNom">Veuillez renseigner votre nom <i>(entre 2 et 50 caractères).</i></label>


						<label for="mailaddress">Votre adresse e-mail    <span id="checkMail" class="entypo-check"></span></label>
						<input type="email" id="mailaddress" name="mailaddress" onblur="verifMail(this)">
						<label id="erreurMail">Veuillez entrer une adresse e-mail valide.</label>


						<label for="message">Votre message    <span id="checkMsg" class="entypo-check"></span></label></td>
						<textarea id="message" type="text" name="message" rows="6" onblur="verifMsg(this)"></textarea>
						<label id="erreurMsg">Veuillez écrire un message <i>(max 1500 caractères).</i></label>

						<button id="sendbutton" type="submit">Envoyer</button>
					</form>
				</section>




		</main>



	</body>
</html>
