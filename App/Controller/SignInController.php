<?php
namespace App\Controller;
use App\Model\SignInModel;

class SignInController {

    public function __construct()
    {
        $this->model = new SignInModel();
    }

    public function renderIndex($message) {

        require ROOT."/App/View/SignInView.php";
    }

    public function createUser() {

        $message = $this->model->signInUser();
        return $message;

    }
}