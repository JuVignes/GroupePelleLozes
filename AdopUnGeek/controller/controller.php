<?php

namespace Controller;

class adoptController {

    public static function accueil() {
        global $smarty;
        $smarty->display('views/accueil.smarty.tpl');
    }

    public static function get_inscription() {
        global $smarty;
        $smarty->display('views/Inscription.smarty.tpl');
    }
}