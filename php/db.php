<?php
							//CONNEXION A LA BASE DE DONNEES
							//On essaie qqch avec try, si il ya une erreur, on exécute qqch avec catch
							try{
							//Création de l'objet bdd via le constructeur PDO (issu de l'extension PHP Data Objects). C'est ainsi que l'on se connecte à MySQL. On active également la détection d'erreurs SQL.
							$bdd_cv = new PDO('mysql:host=localhost;dbname=cv_nab;charset=utf8','root','pipi', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
							}
							//On récupère le code erreur renvoyé par PHP, on met fin à l'exécution de la page, et on affiche le message correspondant au code erreur.
							catch (Exception $e) {
								die('Erreur : '. $e->getMessage());
							}

/*
							function requete(){
								//On prépare la requete (afin d'eviter des injections SQL).
								$r = $bdd_cv->prepare('SELECT ID, nom, mail, message, date, time FROM messages');

								//On exécute la requete avec les variables "nettoyées" des éventuelles injections SQL.
								$r->execute(array());

								return $r;
							}

							function requeteAuteur(keyword){
								$r = $bdd_cv->prepare('SELECT ID, nom, mail, message, date, time FROM messages WHERE nom = ?');

								//On exécute la requete avec les variables "nettoyées" des éventuelles injections SQL.
								$r->execute(array(keyword));

								return $r;
							}*/


?>
