<?php

class ModelTimbre extends Crud {

    protected $table = 'Timbre';
    protected $primaryKey = 'id';
    
    protected $fillable = ['id', 'nom', 'description', 'date_creation', 'couleur', 'pays_origine', 'etat', 'tirage', 'dimension', 'certifie'];

    public function getTimbreByEnchereId($idEnchere){
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
                WHERE Enchere.id = :idEnchere
        ";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":idEnchere", $idEnchere);
        $stmt->execute();
        return $stmt->fetch();
    }
}

?>