<?php
namespace App\Controller;
use App\Model\modifProfilModel;

// Création d'une classe modifProfilController permettant de controler la page de modifictation du profil de l'utilisateur
class modifProfilController {

    public function __construct()
    {
        $this->model = new modifProfilModel();
    }

    public function renderIndex() {

        require ROOT."/App/View/modifProfilView.php";
    }
}
