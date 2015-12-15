<?php

//front controller


require('library/smarty-3.1.27/libs/Smarty.class.php');
$smarty = new Smarty();
require('controller/controller.php');
use \Controller\adoptController;
require('library/formulaire.php');

if(!isset($_GET['page']) || $_GET['page'] == 'accueil') {
    adoptController::accueil();
}

else if($_GET['page'] == 'inscription'){
    adoptController::get_inscription();
}

