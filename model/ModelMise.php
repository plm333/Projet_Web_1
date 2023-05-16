<?php

class ModelMise extends Crud {

    protected $table = 'Mise';
    protected $primaryKey = 'id';
    
    protected $fillable = ['id', 'prix', 'date', 'utilisateur_id', 'enchere_id'];

    public function getMisesByEnchereId($idEnchere){
        $sql = "
                SELECT 
                *
                FROM Mise
                INNER JOIN Utilisateur ON Mise.Utilisateur_id = Utilisateur.id
                WHERE Mise.Enchere_id = :enchere_id
        ";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":enchere_id", $idEnchere);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>