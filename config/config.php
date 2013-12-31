<?php
define("DBHOST", "localhost");
define("DBNAME", "test");
define("DBUSER", "root");
define("DBPASS", "root");

try{
	mysql_query("SET NAMES 'utf8'");
	$bdd = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPASS);
}
catch (Exception $e){
	echo ("Connexion Abort !  --->   ");
	die('Erreur : ' . $e->getMessage());
}
