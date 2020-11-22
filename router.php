<?php

use App\Controller\HomeController;
use App\Controller\ResultPollController;
use App\Controller\CreatePollController;

if(array_key_exists("page", $_GET)){
    switch ($_GET["page"]) {
        case 'home':
            $controller = new HomeController();
            $controller->renderIndex();
            break;
        case 'results':
            $controller = new ResultPollController();
            $controller->renderIndex();
        case 'createPoll':
            $controller = new CreatePollController();
            $controller->renderIndex();

        default:
            # code...
            break;
    }
} else{
    $controller = new HomeController();
    $controller->renderIndex();
}