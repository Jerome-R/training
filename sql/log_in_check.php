<?php

try{
	$req = $bdd->query("SELECT * FROM test.user WHERE email = '$email' LIMIT 1");
}
catch (Exception $e){
	echo ("Connexion Abort !  --->   ");
	die('Erreur : ' . $e->getMessage());
}


$user = $req->fetch();
$req->closeCursor();