<?php
use App\Controller\HomeController;
use App\Controller\ResultPollController;
use App\Controller\SignInController;
use App\Controller\LogInController;

define("ROOT", dirname(__DIR__));
require ROOT."/vendor/autoload.php";

header('Content-Type: text/html; charset=UTF-8');

require ROOT."/router.php";