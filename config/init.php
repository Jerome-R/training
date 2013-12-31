<?php
// Permet l'encodage de tout le site en UTF8 !!
header( 'content-type: text/html; charset=utf-8' );

require_once('config.php');
require_once('vendors/twig/lib/Twig/Autoloader.php');

Twig_Autoloader::register();
   
$loader = new Twig_Loader_Filesystem('templates'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
			'cache' => false
));