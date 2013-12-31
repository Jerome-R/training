<?php //read_static.php
	// Lecture des données en BDD
	// Récupération des messages de Chat
	// On récupère tout le contenu de la table chat dans la BDD test

	$req = $bdd->query("SELECT * FROM test.chat ORDER by id DESC LIMIT 10");
	//Pour afficher plusieurs éléments Chats on utilise $req->fetchObject() avec la boucle while dans un tableau
	//Ici on s'occupe de plusieurs lignes / rows
	while ($row = $req->fetchObject()){
		$donnees[] = $row;
	}

	//A mettre, sinon, le traitement reste en cours et la suite des lignes ne sera pas lu
	// Terminer le traitement de la requête
	$req->closeCursor(); 

	//Si on ne voulait afficher qu'un seul élément "Chat" on utiliserai $req->fetch()
	//Ici, on ne s'occupe que d'un élément unque de la table, 1 ligne / row
	$req = $bdd->query("SELECT * FROM test.chat WHERE auteur = 'oyo' LIMIT 1");
	$chat_oyo = $req->fetch();
	$req->closeCursor();