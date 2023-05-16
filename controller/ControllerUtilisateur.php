<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelUtilisateur');
RequirePage::requireModel('ModelRole');

class ControllerUtilisateur{

    public function index(){
        //CheckSession::sessionAuth();
        $utilisateur = new ModelUtilisateur;
        $select = $utilisateur->select();
        twig::render("utilisateur/utilisateur-mesInfos.php", ['utilisateurs' => $select]);
    }

    public function create(){
        twig::render('utilisateur/utilisateur-create.php', []);          
    }

    public function store(){
        $validation = new Validation;
        extract($_POST);
        $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(45);
        $validation->name('prenom')->value($prenom)->pattern('alpha')->required()->max(45);
        $validation->name('courriel')->value($courriel)->pattern('email')->required()->max(50);
        $validation->name('username')->value($username)->pattern('email')->required()->max(50);
        $validation->name('password')->value($password)->max(20)->min(6);

        if($validation->isSuccess()){
            $utilisateur = new ModelUtilisateur;
            $options = [
                'cost' => 10,
            ];
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
            $_POST['Role_id'] = 2;
            $utilisateurInsert = $utilisateur->insert($_POST);
            twig::render('utilisateur/utilisateur-login.php');
        }else{
            $errors = $validation->displayErrors();
            $role = new ModelRole;
            $selectRole = $role->select();
            twig::render('utilisateur/utilisateur-create.php', ['errors' => $errors,'roles' => $selectRole, 'utilisateur' => $_POST]);
        }
    }

    public function mesInfos(){ 
        // $utilisateur = new ModelUtilisateur;
        // $selectUtilisateur = $utilisateur->selectId($id);
        // // print_r($selectUtilisateur);
        // // die();
        Twig::render('utilisateur/utilisateur-mesInfos.php', []);
    } 

    public function profil(){ 
        $id = $_SESSION['utilisateur_id'];
        Twig::render('utilisateur/utilisateur-profil.php', ['utilisateur_id' => $id]);
    } 

    public function details()
    {
        twig::render("enchere/enchere-detail.php", []);
    }

    public function show($id){
        $id = $_SESSION['utilisateur_id'];
        $utilisateur = new ModelUtilisateur;
        $selectUtilisateur = $utilisateur->selectId($id);
        twig::render('utilisateur/utilisateur-mesInfos.php', ['utilisateur' => $selectUtilisateur,
                                                                'utilisateur_id' => $id
                                                            ]);
    }

    public function edit($id){
        $utilisateur = new ModelUtilisateur;
        $selectUtilisateur = $utilisateur->selectId($id);
        twig::render('utilisateur/utilisateur-edit.php', ['utilisateur' => $selectUtilisateur]);
    }

    public function update(){
        $utilisateur = new ModelUtilisateur;
        $updateUtilisateur = $utilisateur->update($_POST);
        RequirePage::redirectPage('utilisateur/show/'.$_POST['id']);
    }

    public function delete(){
        $utilisateur = new ModelUtilisateur;
        $deleteUtilisateur = $utilisateur->delete($_POST['id']);
        RequirePage::redirectPage('utilisateur/create');
    }
}
?>
