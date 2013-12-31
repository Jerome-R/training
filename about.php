<?php

require_once('config/init.php');

$template = $twig->loadTemplate('about.html');
    echo $template->render(array(
    )); 