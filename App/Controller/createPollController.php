<?php
namespace App\Controller;

class CreatePollController {

    public function renderIndex() {
        require ROOT."/App/View/createPollView.php";
    }
}