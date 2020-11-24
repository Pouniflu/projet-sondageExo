<?php
namespace App\Controller;
use App\Model\CreatePollModel;

class CreatePollController {

    public function __construct()
    {
        $this->model = new CreatePollModel();
    }

    public function renderIndex() {
        $test = $this->model->createPoll();
        require ROOT."/App/View/createPollView.php";
    }

}