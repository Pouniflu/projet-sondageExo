<?php
// UTILISATION DU ROUTER :
// 1. Ajouter la classe utilisée en premier avec "use"
// 2. Créer un nouveau "case"
// exemple : si on va sur l'url projet-sondageexo.test/Public/?page=result on se retrouve sur la View Result parce qu'on a
// appelé la méthode renderIndex() (cf App\Controller\ResultPollController pour voir cette méthode).


use App\Controller\HomeController;
use App\Controller\ResultPollController;
use App\Controller\CreatePollController;
use App\Controller\SignInController;
use App\Controller\LogInController;
use App\Controller\profilController;
use App\Controller\ChatController;
use App\Model\ChatModel;


if(array_key_exists("page", $_GET)){
    switch ($_GET["page"]) {
        case 'home':
            $controller = new HomeController();
            $controller->renderIndex();
            break;
        case 'results':
            $controller = new ResultPollController();
            $controller->renderIndex();
            break;
        case 'createPoll':
            $controller = new CreatePollController();
            $controller->renderIndex();
            break;
        case 'signIn':
            $message = null;
            $controller = new SignInController();
            if(isset($_POST["lastName"])){
                $message = $controller->createUser();
            }
            $controller->renderIndex($message);
            break;
        case 'logIn':
            $controller = new LogInController();
            if(isset($_POST["pseudoConnect"])){
                $controller->LogUser();
            }
            $controller->renderIndex();
            break;
        case 'profil':
            $controller = new profilController();
            $controller->renderIndex();
            break;
        // case 'chat':
        //     $controller = new ChatController();
        //     $controller->renderIndex();
        //     break;
        default:
            # code...
            break;
    }
} else{
    $controller = new HomeController();
    $controller->renderIndex();
}

// $chat = new Chat();
// if(array_key_exists("function", $_GET)){
//     switch ($_GET["function"]) {
//         case 'postMessage':
//             $chat->postMessage($_POST);
//             break;
//         case 'getMessages':
//             $chat->getMessages();
//             break;
//     }
// }