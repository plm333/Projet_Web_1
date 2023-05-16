<?php

class ModelRole extends Crud {

    protected $table = 'Role';
    protected $primaryKey = 'id';
    
    protected $fillable = ['id', 'role'];

    public function checkAdmin($data){
        extract($data);
        $sql = "SELECT * FROM $this->table WHERE username = ?";
        $stmt = $this->prepare($sql);

        $stmt->execute(array($username));
        $count = $stmt->rowCount();

        if($count == 1){
            $utilisateur_info = $stmt->fetch();
            if(password_verify($password, $utilisateur_info['password'])){
                    
                session_regenerate_id();
                $_SESSION['utilisateur_id'] = $utilisateur_info['id'];
                $_SESSION['Role_id'] = $utilisateur_info['Role_id'];
                $_SESSION['username'] = $utilisateur_info['username'];
                $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
                
                Twig::render('admin/admin-profil.php', []);
                
            }else{
                return "<ul><li>Vérifier le mot de passe</li></ul>";  
            }
        }else{
            return "<ul><li>Le nom d'utilisateur n'existe pas</li></ul>";
        }
    }
}

?>