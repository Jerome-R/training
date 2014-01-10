<?php //read_static.php

	//Variable pour la pagination
	if( isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] >= 1)
	    $page = $_GET['page'];
	else
    	$page = 1;

	// Nombre de chat par page
	$pagination = 10;
	// Numéro du 1er enregistrement à lire
	$limit_start = ($page - 1) * $pagination;

	// Lecture des données en BDD
	// Récupération des messages de Chat
	// On récupère tout le contenu de la table chat dans la BDD test
	// On fait test pour faire la requête en fonction du numéro de page

	if($page == 1){

		$req = $bdd->query("SELECT * FROM test.chat ORDER by id DESC LIMIT 10");
		//Pour afficher plusieurs éléments Chats on utilise $req->fetchObject() avec la boucle while dans un tableau
		//Ici on s'occupe de plusieurs lignes / rows
		while ($row = $req->fetch()){
			$donnees[] = $row;
		}
	}
	//si la page est supérieur à 1 on incrémente de n*10.
	else{
		$req = $bdd->query("SELECT * FROM test.chat ORDER by id DESC LIMIT $limit_start, $pagination");
	
		//Pour afficher plusieurs éléments Chats on utilise $req->fetchObject() avec la boucle while dans un tableau
		//Ici on s'occupe de plusieurs lignes / rows
		while ($row = $req->fetch()){
			$donnees[] = $row;
		}
	}

	// Nb total de pages
	$count = $bdd->query('SELECT COUNT(*) AS nb_total FROM test.chat');
	$count = $count->fetch();
	$count = $count['nb_total'];


	//A mettre, sinon, le traitement reste en cours et la suite des lignes ne sera pas lu
	// Terminer le traitement de la requête
	$req->closeCursor(); 

	//Si on ne voulait afficher qu'un seul élément "Chat" on utiliserai $req->fetch()
	//Ici, on ne s'occupe que d'un élément unque de la table, 1 ligne / row
	$req = $bdd->query("SELECT * FROM test.chat WHERE auteur = 'oyo' LIMIT 1");
	$chat_oyo = $req->fetch();
	$req->closeCursor();