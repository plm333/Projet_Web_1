<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelUtilisateur');
RequirePage::requireModel('ModelFavori');
RequirePage::requireModel('ModelTimbre');
RequirePage::requireModel('ModelEnchere');
RequirePage::requireModel('ModelImage');
RequirePage::requireModel('ModelMise');

class ControllerEnchere
{

    public function create()
    {
        Twig::render('enchere/enchere-create.php');
    }

    public function store()
    {
        $validation = new Validation;
        extract($_POST);

        $validation->name('nom')->value($nom)->required()->max(100);
        $validation->name('description')->value($description)->required()->max(200);
        $validation->name('date_creation"')->value($date_creation)->pattern('date_ymd')->required();
        $validation->name('couleur')->value($couleur)->required()->max(50);
        $validation->name('pays_origine')->value($pays_origine)->required()->max(50);
        $validation->name('etat')->value($etat)->required()->max(50);
        $validation->name('tirage')->value($tirage)->pattern('int')->required();
        // $validation->name('dimension')->value($dimensions)->required()->max(50);
        // $validation->name('certifie')->value($certifie)->pattern('int')->required();
        $validation->name('prix_debut')->value($prix_debut)->pattern('float')->required();
        $validation->name('date_fin')->value($date_fin)->pattern('date_ymd')->required();

        if ($validation->isSuccess()) {

            $modelTimbre = new ModelTimbre();
            $modelEnchere = new ModelEnchere();

            $timbre = [
                'nom' => $_POST['nom'],
                'description' => $_POST['description'],
                'date_creation' => $_POST['date_creation'],
                'couleur' => $_POST['couleur'],
                'pays_origine' => $_POST['pays_origine'],
                'etat' => $_POST['etat'],
                'tirage' => $_POST['tirage'],
                'dimension' => $_POST['dimension'],
                'certifie' => 1
            ];

            /* Insertion du timbre dans la base de donnée */
            $idTimbre = $modelTimbre->insert($timbre);

            $target_dir = "assets/uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
            /** Validation de l'image téléchargée */
            
            // // Check if image file is a actual image or fake image
            // if(isset($_POST["submit"])) {
            //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            //     if($check !== false) {
            //         echo "File is an image - " . $check["mime"] . ".";
            //         $uploadOk = 1;
            //     } else {
            //         echo "File is not an image.";
            //         $uploadOk = 0;
            //     }
            // }
    
            // // Check if file already exists
            // if (file_exists($target_file)) {
            //     echo "Sorry, file already exists.";
            //     $uploadOk = 0;
            // }
    
            // // Check file size
            // if ($_FILES["fileToUpload"]["size"] > 500000) {
            //     echo "Sorry, your file is too large.";
            //     $uploadOk = 0;
            // }
    
            // // Allow certain file formats
            // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            // && $imageFileType != "gif" ) {
            //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            //     $uploadOk = 0;
            // }
    
            // // Check if $uploadOk is set to 0 by an error
            // if ($uploadOk == 0) {
            //     echo "Sorry, your file was not uploaded.";
            // // if everything is ok, try to upload file
            // } else {

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    
                    $modelImage = new ModelImage();
                    $image = [
                        'source' => $_FILES['fileToUpload']['name'],
                        'type' => $_POST['typeImage'],
                        'timbre_id' => $idTimbre
                    ];
                    /* Insertion de l'image dans la base de donnée */
                    $modelImage->insert($image);
                }

                $now = new DateTime();
                $enchere = [
                    'date_debut' => $now->format('Y-m-d H:i:s'),
                    'date_fin' => $_POST['date_fin'],
                    'prix_debut' => $_POST['prix_debut'],
                    'mise_courante' => $_POST['prix_debut'],
                    'lord_favoris' => 0,
                    'timbre_id' => $idTimbre,
                    'utilisateur_id' => $_SESSION['utilisateur_id']
                ];

                /* Insertion de l'enchère dans la base de donnée */
                $idEnchere = $modelEnchere->insert($enchere);

                RequirePage::redirectPage('enchere/detailsEnchere/' . $idEnchere);
            } else {
                $errors = $validation->displayErrors();
                Twig::render('enchere/enchere-create.php', ['errors' => $errors]);
            }
    }

    public function show($idEnchere)
    {
        $id = $_SESSION['utilisateur_id'];
        $modelEnchere = new ModelEnchere();
        $modelTimbre = new ModelTimbre();
        $modelImage = new ModelImage();

        $enchere = $modelEnchere->getEnchereById($idEnchere);

        Twig::render('enchere/enchere-detail.php', 
        [
            'enchere' => $enchere,
            'utilisateur_id' => $id
        ]);
    }

    public function detailsEnchere($idEnchere)
    {
        $modelEnchere = new ModelEnchere();
        $modelTimbre = new ModelTimbre();
        $modelImage = new ModelImage();
        $modelMise = new ModelMise();

        $enchere = $modelEnchere->getEnchereById($idEnchere);

        $prixDebut = $enchere['prix_debut'];

        $miseMinimale = $enchere['mise_courante'] + 1;

        if ($miseMinimale < $enchere['mise_courante']) {
            RequirePage::redirectPage('home/error');
        }

        if ($enchere['mise_courante'] == '') {
            $enchere['mise_courante'] = $prixDebut;
        }

        $certifie = $enchere['certifie'];
        if ($certifie == 0) {
            $certifie = 'non';
        } else {
            $certifie = 'oui';
        }

        Twig::render('enchere/enchere-detail.php', 
        [ 
            'image' => $enchere['idImage'],
            'source' => $enchere['source'],
            'nom' => $enchere['nom'],
            'description' => $enchere['description'],
            'date_creation' => $enchere['date_creation'],
            'couleur' => $enchere['couleur'],
            'pays_origine' => $enchere['pays_origine'],
            'etat' => $enchere['etat'],
            'tirage' => $enchere['tirage'],
            'dimension' => $enchere['dimension'],
            'certifie' => $certifie,
            'mise_courante' => $enchere['mise_courante'],
            'miseMinimale' => $miseMinimale,
            'idEnchere' => $idEnchere,
            'utilisateur_id' => $_SESSION['utilisateur_id'],
            'utilisateur_id' => $enchere['utilisateur_id'],
            // 'mises' => $mises,
            'prix' => $enchere['mise_courante'],
            'prix_debut' => $prixDebut,
            // 'nbMise' => count($mises)
        ]);
    }

    public function mesEncheres()
    {

        $modelEnchere = new ModelEnchere();
        $modelTimbre = new ModelTimbre();
        $modelImage = new ModelImage();
        $modelMise = new ModelMise();
        
        $encheres = $modelEnchere->getEnchereByUtilisateurId($_SESSION['utilisateur_id']);
        
        Twig::render('enchere/enchere-mesEncheres.php', 
        [
            'image' => $encheres['idImage'],
            'source' => $encheres['source'],
            'encheres' => $encheres
        ]);
    }

    public function modifierEnchere($idEnchere)
    {
        $modelEnchere = new ModelEnchere();
        $enchere = $modelEnchere->getEnchereById($idEnchere);

        twig::render('enchere/enchere-edit.php', 
            [
                'idEnchere' => $enchere['id'],
                'nom' => $enchere['nom'],
                'description' => $enchere['description'],
                'date_creation' => $enchere['date_creation'],
                'couleur' => $enchere['couleur'],
                'pays_origine' => $enchere['pays_origine'],
                'etat' => $enchere['etat'],
                'tirage' => $enchere['tirage'],
                'dimension' => $enchere['dimension'],
                'certifie' => $enchere['certifie'],
                'prix_debut' => $enchere['prix_debut'],
                'date_fin' => $enchere['date_fin'],
                'image' => $enchere['imageId'],
                'source' => $enchere['source']
            ]
        );
    }

    public function catalogue()
    {
        $modelEnchere = new ModelEnchere();
        $modelTimbre = new ModelTimbre();
        $modelImage = new ModelImage();
        $modelMise = new ModelMise();
        
        $encheres = $modelEnchere->getToutesLesEncheres();
        
        Twig::render('enchere/enchere-catalogue.php', 
            [
                'image' => $encheres['idImage'],
                'source' => $encheres['source'],
                'encheres' => $encheres
            ]
        );
    }

    public function mesFavoris()
    {

        $modelEnchere = new ModelEnchere();
        $modelTimbre = new ModelTimbre();
        $modelImage = new ModelImage();
        $modelMise = new ModelMise();
        
        $encheres = $modelEnchere->getEnchereByUtilisateurId($_SESSION['utilisateur_id']);
        
        Twig::render('enchere/enchere-mesFavoris.php', 
        [
            'image' => $encheres['idImage'],
            'source' => $encheres['source'],
            'encheres' => $encheres
        ]);
    }

    public function update(){
        $enchere = new ModelEnchere;
        $updateEnchere = $enchere->update($_POST);
        RequirePage::redirectPage('enchere/enchere-detail.php'.$_POST['id']);
    }

    public function supprimerEnchere($idEnchere){
        $modelEnchere = new ModelEnchere();
        $modelTimbre = new ModelTimbre();
        $modelImage = new ModelImage();
        $timbre = $modelTimbre->getTimbreByEnchereId($idEnchere);

        $modelImage->deleteByTimbreId($timbre['id']);
        $modelTimbre->delete($timbre['id']);
        $modelEnchere->delete($timbre[$idEnchere]);
        twig::render('enchere/enchere-mesEncheres.php');
    }
}
