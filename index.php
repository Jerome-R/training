<?php

require_once('config/init.php');


$template = $twig->loadTemplate('index.html');
    echo $template->render(array(
    )); 

