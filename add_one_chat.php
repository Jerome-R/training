<?php
require_once("config/init.php");


if (!$_GET["d"]){
	// Requête SQL pour écriture en BDD
	include("sql/write_static.php");

	//Redirection vers la page chat.php une fois l'écriture en BDD terminé
	echo "<script type='text/javascript'>document.location.replace('chat.php');</script>";
}
else{
	// Requête SQL pour écriture en BDD
	include("sql/write_dynamic.php");

	//Redirection vers la page chat.php une fois l'écriture en BDD terminé
	echo "<script type='text/javascript'>document.location.replace('chat.php?d=true');</script>";
}

