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

    function Recherche_competence($attributes){
        Model::select($attributes['id_competence']);
    }

}