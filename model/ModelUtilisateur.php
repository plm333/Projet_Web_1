<?php

class ModelUtilisateur extends Crud {

    protected $table = 'Utilisateur';
    protected $primaryKey = 'id';
    
    protected $fillable = ['id', 'nom', 'prenom', 'adresse', 'code_postal', 'telephone', 'courriel', 'date_naissance', 'date_inscription', 'username', 'password', 'Role_id'];


        public function checkUtilisateur($data){
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
                    $_SESSION['role_id'] = $utilisateur_info['role_id'];
                    $_SESSION['username'] = $utilisateur_info['username'];
                    $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
                    
                    Twig::render('utilisateur/utilisateur-profil.php', []);
                    
                }else{
                    return "<ul><li>Vérifier le mot de passe</li></ul>";  
                }
            }else{
                return "<ul><li>Le nom d'utilisateur n'existe pas</li></ul>";
            }
        }
}

?>