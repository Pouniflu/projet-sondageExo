<?php 
namespace App\Controller;
use App\Model\ResultPollModel;

// Création d'une classe ResultPollController permettant de controler la page de résultat d'un sondage
class ResultPollController {

    public function __construct()
    {
        $this->model = new ResultPollModel();
    }

    public function renderIndex() {
        $question = $this->model->getQuestionPoll();
        $answers = $this->model->getAnswersPoll();
        require ROOT."/App/View/resultPollView.php";
    }
}