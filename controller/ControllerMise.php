<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelEnchere');
RequirePage::requireModel('ModelTimbre');
RequirePage::requireModel('ModelUtilisateur');
RequirePage::requireModel('ModelMise');
RequirePage::requireModel('ModelImage');


class ControllerMise
{

    public function faireUneMise()
    {
        extract($_POST);
        $modelEnchere =  new ModelEnchere();
        $modelMise = new ModelMise();

        $enchere = $modelEnchere->getEnchereById($idEnchere);

        if ($_SESSION['utilisateur_id'] == $enchere['utilisateur_id']) {
            RequirePage::redirectPage('home/error');
        }

        if ($prix > $enchere['mise_courante']) {

            $now = new DateTime();
            $nouvelleMise = [
                'utilisateur_id' => $_SESSION['utilisateur_id'],
                'enchere_id' => $idEnchere,
                'prix' => number_format($prix, 2, '.', ''),
                'date' => $now->format('Y-m-d H:i:s'),
            ];

            $idMise = $modelMise->insert($nouvelleMise);

            $enchereModifiee = [
                'id' => $idEnchere,
                'mise_courante' => $prix
            ];
            $enchere = $modelEnchere->update($enchereModifiee);

            ob_start();
            RequirePage::redirectPage('enchere/detailsEnchere/' . $idEnchere);
            exit;
        }

        if ($prix < $enchere['mise_courante']) {
            RequirePage::redirectPage('home/error');
        }

        twig::render("enchere/enchere-detail.php" . $idEnchere,
            [
                'mise' => $enchere,
                'prix' => $prix,
                'idEnchere' => $idEnchere,
                'utilisateur_id' => $enchere['utilisateur_id']
                // 'errors' => $validation->displayErrors()
            ]
        );
    }

    public function mesMises()
    {
        $modelEnchere = new ModelEnchere();
        $encheres = $modelEnchere->getEnchereByUtilisateurId($_SESSION['utilisateur_id']);
        $mises = $modelEnchere->getMisesByUtilisateurId($_SESSION['utilisateur_id']);

        Twig::render("enchere/enchere-mesMises.php",
            [
                'image' => $mises['idImage'],
                'source' => $mises['source'],
                'mises' => $mises
            ]
        );
    }
}
