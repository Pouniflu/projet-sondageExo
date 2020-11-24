<?php
namespace App\Controller;
use App\Model\CreatePollModel;

// Création d'une classe Create Poll Controler
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