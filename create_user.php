<?php 

require_once("config/init.php");

if( isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['pseudo']) && $_POST['email'] != "" && $_POST['psw'] != "" && $_POST['pseudo'] != ""){

	include("sql/write_user.php");

	echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
}
else{
	//Sinon on redirige vers la page d'erreur
	$template = $twig->loadTemplate('error.html');
    echo $template->render(array(
    )); 
}