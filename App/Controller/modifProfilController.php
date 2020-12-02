<?php
namespace App\Controller;
use App\Model\ModifProfilModel;

// Création d'une classe modifProfilController permettant de controler la page de modifictation du profil de l'utilisateur
class ModifProfilController {

    public function __construct()
    {
        $this->model = new ModifProfilModel();
    }

    public function renderIndex() {

        require ROOT."/App/View/modifProfilView.php";
    }
}
