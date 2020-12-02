<?php
namespace App\Controller;
use App\Model\CreatePollModel;

// Création d'une classe CreatePollController permettant de controler la page de création de sondages
class CreatePollController {

    public function __construct()
    {
        $this->model = new CreatePollModel();
    }

    public function renderIndex() {
        $createPollMessage = $this->model->createPoll();
        require ROOT."/App/View/createPollView.php";
    }
}