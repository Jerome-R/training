<?php

require_once("config/init.php");

//On vérifie si les bonnes variables ont été envoyés
if( isset($_POST['email']) && isset($_POST['psw']) && $_POST['email'] != "" && $_POST['psw'] != ""){
	$email = $_POST['email'];
	$pass =  $_POST['psw'];

	//on execute la requête de récupération de l'utilisateur
	include("sql/log_in_check.php");

	//On vérifie si le mot de passe est le bon
	if($pass == $user['psw']){
		//On redirige en page d'accueil
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
	}
	else{
		//Sinon on redirige vers la page d'erreur
		$template = $twig->loadTemplate('error.html');
	    echo $template->render(array(
	    )); 
	}

}
else{
	//Sinon on redirige vers la page d'erreur
	$template = $twig->loadTemplate('error.html');
    echo $template->render(array(
    )); 
}