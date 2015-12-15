<?php


public static $table = 'ingenieur';
public static $primary = 'id_ingenieur';
public static $attributes = [
    'id_competence',
    'nom',
    'prenom',
];

class Profesionnel extends Model
{
    function Recherche_competence($competence){
        global $dbh;
        Model::select('id_comepetence');
    }

}