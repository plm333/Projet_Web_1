<?php

class ModelEnchere extends CRUD {
    protected $table = 'Enchere';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'date_debut', 'date_fin', 'prix_debut', 'mise_courante', 'lord_favoris', 'timbre_id', 'utilisateur_id'];

    public function getEnchereById($id){
        $sql = "
                SELECT 
                    Enchere.id AS idEnchere, 
                    Enchere.date_debut, 
                    Enchere.date_fin, 
                    Enchere.prix_debut,
                    Enchere.mise_courante,  
                    Enchere.lord_favoris, 
                    Timbre.id AS idTimbre,
                    Timbre.nom,
                    Timbre.description,
                    Timbre.date_creation,
                    Timbre.couleur,
                    Timbre.pays_origine,  
                    Timbre.etat,
                    Timbre.tirage,
                    Timbre.dimension,
                    Timbre.certifie,
                    Image.id AS idImage,
                    Image.source,
                    Image.type
                FROM Enchere
                JOIN Timbre ON enchere.timbre_id = timbre.id 
                JOIN Image ON enchere.timbre_id = image.timbre_id 
                WHERE enchere.id = :id
        ";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getEnchereByUtilisateurId($utilisateur_id){
        $sql = "
                SELECT 
                Enchere.id AS idEnchere, 
                Enchere.date_debut, 
                Enchere.date_fin, 
                Enchere.prix_debut,
                Enchere.mise_courante, 
                Enchere.lord_favoris, 
                Timbre.id AS idTimbre,
                Timbre.nom,
                Timbre.description,
                Timbre.date_creation,
                Timbre.couleur,
                Timbre.pays_origine,  
                Timbre.etat,
                Timbre.tirage,
                Timbre.dimension,
                Timbre.certifie,
                Image.id AS idImage,
                Image.source,
                Image.type,
                Mise.prix,
                Mise.date,
                Mise.utilisateur_id
                FROM Enchere 
                JOIN Timbre ON enchere.timbre_id = timbre.id 
                JOIN Image ON enchere.timbre_id = image.timbre_id 
                LEFT JOIN Mise ON enchere.id = mise.enchere_id
                WHERE Enchere.utilisateur_id = :utilisateur_id
        ";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":utilisateur_id", $utilisateur_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getToutesLesEncheres(){
        $sql = "
                SELECT 
                    Enchere.id AS idEnchere,
                    Enchere.date_fin,
                    Enchere.prix_debut,
                    Enchere.mise_courante,
                    Timbre.id AS idTimbre,
                    Timbre.nom,
                    Timbre.description,
                    Timbre.date_creation,
                    Timbre.couleur,
                    Timbre.pays_origine,  
                    Timbre.etat,
                    Timbre.tirage,
                    Timbre.dimension,
                    Timbre.certifie,
                    Mise.prix,
                    Image.source,
                    Image.type
                FROM Enchere 
                JOIN Timbre ON enchere.timbre_id = timbre.id
                LEFT JOIN Mise ON mise.enchere_id = enchere.id
                LEFT JOIN Image ON image.timbre_id = timbre.id
        ";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getMisesByUtilisateurId($utilisateur_id){
        $sql = "
                SELECT 
                    Enchere.id AS idEnchere,
                    Enchere.date_debut,
                    Enchere.date_fin,
                    Enchere.prix_debut,
                    Enchere.mise_courante,
                    Timbre.id AS idTimbre,
                    Timbre.nom,
                    Timbre.description,
                    Timbre.date_creation,
                    Timbre.couleur,
                    Timbre.pays_origine,  
                    Timbre.etat,
                    Timbre.tirage,
                    Timbre.dimension,
                    Timbre.certifie,
                    Mise.prix,
                    Mise.date,
                    Mise.utilisateur_id,
                    Image.source,
                    Image.type
                FROM Enchere 
                JOIN Timbre ON Enchere.Timbre_id = Timbre.id 
                LEFT JOIN Image ON Image.Timbre_id = Timbre.id
                JOIN Mise ON Mise.Enchere_id = Enchere.id
                WHERE Mise.utilisateur_id = :utilisateur_id
        ";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":utilisateur_id", $utilisateur_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>