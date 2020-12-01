<?php
namespace App\Controller;
use App\Controller\Chat;

class ChatController{

    public function __construct() {
        $this->model = new Chat();
    }

    public function renderIndex() {
        require ROOT."/App/View/ChatView.php";
    }
}