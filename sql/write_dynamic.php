<?php //write_dynamic.php
	try{
		//On prépare la requête
		$req = $bdd->prepare('INSERT INTO test.chat(date, auteur, texte) VALUES (NOW(), :auteur, :texte)');
		//Puis on l'exécute en spécifiant les valeurs
		$req->execute(array(
			'auteur'	=>	$_POST["auteur"], // On associe les valeurs postées à la requête
			'texte'		=>	$_POST["message"] // cf name="auteur" et name="message" dans mini-chat.html
			));
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}