<?php

require_once('config/init.php');

//Requêtes sql pour lire en BDD
include("sql/read_static.php");

if (!$_GET["d"]){

	$file='sql/write_static.php'; 
	$contenu=file_get_contents($file);

	$file2='sql/read_static.php'; 
	$contenu2=file_get_contents($file2); 

	//Appel de la vue
	$template = $twig->loadTemplate('chat.html');
	echo $template->render(array(
	    'chats' => $donnees,
	    'chat_oyo' => $chat_oyo,
	    'code_write_bdd' => $contenu,
	    'code_read_bdd' => $contenu2
	    )); 
}
else{
	$file='sql/write_dynamic.php'; 
	$contenu=file_get_contents($file);

	$file2='sql/read_static.php'; 
	$contenu2=file_get_contents($file2); 

	//Appel de la vue
	$template = $twig->loadTemplate('mini-chat.html');
	echo $template->render(array(
	    'chats' => $donnees,
	    'code_write_bdd' => $contenu,
	    'code_read_bdd' => $contenu2
	    )); 
}
