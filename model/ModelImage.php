<?php

class ModelImage extends CRUD{
    protected $table = 'Image';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'source', 'type', 'timbre_id'];

    /* Récupération de l'images à partir du timbre id */
    public function getImageByTimbreId($idTimbre){
        $sql = "
                SELECT
                * 
                FROM Image 
                WHERE timbre_id = :timbreId
        ";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":timbreId", $idTimbre);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /* Suppression de l'image du timbre */
    public function deleteByTimbreId($idTimbre){
        $sql = "
                DELETE 
                FROM Image 
                WHERE timbre_id = :timbre_id
        ";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":timbre_id", $idTimbre);
        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }
    }

}

?>