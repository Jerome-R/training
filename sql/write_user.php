<?php

try{
	$req = $bdd->prepare('INSERT INTO test.user(name, email, psw) VALUES (:name, :email, :psw)');
	$req->execute(array(
		'name'	=>	$_POST["pseudo"],
		'email'	=>	$_POST["email"],
		'psw'	=>	$_POST["psw"]	
		)
	);
}
catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}