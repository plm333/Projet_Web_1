<?php

class ModelFavori extends Crud {

    protected $table = 'Favori';
    protected $primaryKey = 'id';
    
    protected $fillable = ['Utilisateur_id', 'Enchere_id'];

}

?>