<?php 
namespace App\Controller;
use App\Model\HomeModel;

// Création d'une classe HomeController permettant de controler la page d'accueil (Home)
class HomeController {

    public function __construct()
    {
        $this->model = new HomeModel();
    }

    public function renderIndex(){
            $polls = $this->model->getPolls();
            require ROOT."/App/View/homeView.php";
    }
}