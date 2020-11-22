<?php
namespace App\Controller;
use App\Model\SignInModel;

// Création d'une classe PollController permettant de controler la page de résultat d'un sondage
class SignInController {

    public function __construct()
    {
        $this->model = new SignInModel();
    }

    public function renderIndex() {

        require ROOT."/App/View/SignInView.php";
    }

    public function createUser() {

        $this->model->signInUser();

        require ROOT."/App/View/LogInView.php";

    }
}