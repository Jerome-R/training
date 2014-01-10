<?php

require_once("config/init.php");

$template = $twig->loadTemplate('sign_in.html');
    echo $template->render(array(
    )); 