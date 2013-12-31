<?php //write_static.php
	try{
		//On prépare la requête
		$req = $bdd->prepare('INSERT INTO test.chat(date, auteur, texte) VALUES (NOW(), :auteur, :texte)');
		//Puis on l'exécute en spécifiant les valeurs
		$req->execute(array(
			'auteur'	=>	"WHOCARES",
			'texte'		=>	"Une valeur aléatoire : ". rand(0, 1000000)
			));
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}