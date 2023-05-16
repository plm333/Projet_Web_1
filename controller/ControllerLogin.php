<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelUtilisateur');
RequirePage::requireModel('ModelRole');

class ControllerLogin{

    public function index(){
        twig::render('utilisateur/utilisateur-login.php');
    }

    public function auth(){
        $validation = new Validation;
        extract($_POST);
        $validation->name('username')->value($username)->pattern('email')->required()->max(50);
        $validation->name('password')->value($password)->required();

        if($validation->isSuccess()){
            // $admin = new ModelRole;
            // $checkAdmin = $admin->checkAdmin($_POST);

            $utilisateur = new ModelUtilisateur;
            $checkUtilisateur = $utilisateur->checkUtilisateur($_POST);
            
            twig::render('utilisateur/utilisateur-login.php', ['errors' => $checkUtilisateur, 'utilisateur' => $_POST]);
        
        }else{
            $errors = $validation->displayErrors();
            twig::render('utilisateur/utilisateur-login.php', ['errors' => $errors, 'utilisateur' => $_POST]);
        }
    }

    public function logout(){
        session_destroy();
        requirePage::redirectPage('login');
    }
}
