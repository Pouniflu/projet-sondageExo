<?php
namespace App\Controller;
use App\Model\LogInModel;

// Création d'une classe LogInController permettant de controler la page de connexion
class LogInController {

    public function __construct()
    {
        $this->model = new LogInModel();
    }

    public function renderIndex() {

        require ROOT."/App/View/LogInView.php";
    }

    public function LogUser() {

        $message = $this->model->logInUser();
        return $message;

    }
}