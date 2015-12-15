<?php


class Profesionnel extends Model
{
    public static $table = 'ingenieur';
    public static $primary = 'id_ingenieur';
    public static $attributes = [
        'id_competence',
        'nom',
        'prenom',
    ];
    
    function Recherche_competence($competence){
        Model::select('id_comepetence');
    }

}