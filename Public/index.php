<?php
use App\Controller\HomeController;

define("ROOT", dirname(__DIR__));
require ROOT."/Autoloader.php";
Autoloader::register();

// Instanciation de la classe HomeController
// On lui applique ensuite la méthode renderIndex() qui provient du controller : ça permet de faire le lien avec la view
$homeController = new HomeController();
$homeController->renderIndex();

// Instanciation de la classe PollControler
$resultPollController = new ResultPollController();
$resultPollController->renderIndex();