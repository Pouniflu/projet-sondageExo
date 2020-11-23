<?php
namespace App\Controller;
use App\Model\LogInModel;


class LogInController {

    public function __construct()
    {
        $this->model = new LogInModel();
    }

    public function renderIndex($message) {

        require ROOT."/App/View/LogInView.php";
    }

    public function LogUser() {

        $message = $this->model->LogInUser();
        return $message;

    }
}