<?php

  //Connexion à la base de données.
  include('db.php');


  if (isset($_POST['nomauteur']) && !empty($_POST['nomauteur'])) {
    $keyword = strip_tags($_POST['nomauteur']);
    $motcle = strtolower($keyword);

    //LECTURE DE DONNEES DANS LA BASE DE DONNEES

    //On prépare la requete (afin d'eviter des injections SQL).
    $req = $bdd_cv->prepare('SELECT ID, nom, mail, message, date, time FROM messages WHERE nom LIKE ?'); // LIKE : recherche dynamique

    //On exécute la requete avec les variables "nettoyées" des éventuelles injections SQL.
    $req->execute(array($motcle));

    if (!empty($req)) {
      # code...
    } else {
      # code...
    }


    //On utilise une boucle pr lister tous les elements de la table (je les intègre en même temps dans un tableau HTML)
    echo '<table id="tabhisto"><tr><th>N°</th><th>Nom</th><th>Adresse e-mail</th><th>Date</th><th>Heure</th><th>Message</th></tr>';
    while ($donnees = $req->fetch()) {
      echo "<tr><td>" . $donnees['ID']."</td><td>". $donnees['nom'] . "</td><td>" . $donnees['mail'] . "</td><td>" . $donnees['date'] ."</td><td>".$donnees['time']. "</td><td>" . $donnees['message'] . "</td></tr>" ;
    }
    echo "</table>";


    $req->closeCursor();
  }
  //  else {
  //   //LECTURE DE DONNEES DANS LA BASE DE DONNEES
  //
  //   //On prépare la requete (afin d'eviter des injections SQL).
  //   $req = $bdd_cv->prepare('SELECT ID, nom, mail, message, date, time FROM messages');
  //
  //   //On exécute la requete avec les variables "nettoyées" des éventuelles injections SQL.
  //   $req->execute(array());
  //
  //   //On utilise une boucle pr lister tous les elements de la table (je les intègre en même temps dans un tableau HTML)
  //   echo '<table id="tabhisto"><tr><th>N°</th><th>Nom</th><th>Adresse e-mail</th><th>Date</th><th>Heure</th><th>Message</th></tr>';
  //   while ($donnees = $req->fetch()) {
  //     echo "<tr><td>" . $donnees['ID']."</td><td>". $donnees['nom'] . "</td><td>" . $donnees['mail'] . "</td><td>" . $donnees['date'] ."</td><td>".$donnees['time']. "</td><td>" . $donnees['message'] . "</td></tr>" ;
  //   }
  //   echo "</table>";
  //
  //
  //   $req->closeCursor();
  // }
  ?>
