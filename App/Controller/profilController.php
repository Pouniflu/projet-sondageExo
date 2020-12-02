<?php
namespace App\Controller;
use App\Model\ProfilModel;

// Création d'une classe profilController permettant de controler la page du profil de l'utilisateur
class ProfilController {

    public function __construct()
    {
        $this->model = new ProfilModel();
    }

    public function renderIndex() {

        require ROOT."/App/View/profilView.php";
    }
}
