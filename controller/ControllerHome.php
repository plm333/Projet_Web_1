<?php

class ControllerHome
{

  public function index()
  {
    twig::render("accueil/index.php");
  }

  public function details()
  {
    twig::render("enchere/enchere-detail.php");
  }

  public function catalogue()
  {
    twig::render("enchere/enchere-catalogue.php");
  }
  
  public function mesEncheres()
  {
    twig::render("enchere/enchere-mesEncheres.php");
  }

  public function admin()
  {
    twig::render("admin/admin-profil.php");
  }

  public function error()
  {
    twig::render("accueil/error.php");
  }
  
}
