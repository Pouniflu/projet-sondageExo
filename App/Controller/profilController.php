<?php
namespace App\Controller;
use App\Model\profilModel;

// Création d'une classe profilController permettant de controler la page du profil de l'utilisateur
class profilController {

    public function __construct()
    {
        $this->model = new profilModel();
    }

    public function renderIndex() {

        require ROOT."/App/View/profilView.php";
    }
}
