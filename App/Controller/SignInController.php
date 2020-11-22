<?php
namespace App\Controller;
use App\Model\SignInModel;
use Core\Database;

// Création d'une classe PollController permettant de controler la page de résultat d'un sondage
class SignInController extends Database {

    public function __construct()
    {
        $this->model = new SignInModel();
    }

    public function renderIndex() {
            $userData = [
                "firstName" => htmlspecialchars($_POST['firstName']),
                "lastName" => htmlspecialchars($_POST['lastName']),
                "pseudo" => htmlspecialchars($_POST['pseudo']),
                "email" => htmlspecialchars($_POST['email']),
                "email2" => htmlspecialchars($_POST['email2']),
                "mdp" => htmlspecialchars($_POST['mdp']),
                "mdp2" => htmlspecialchars($_POST['mdp2']),
            ];
            var_dump($userData);

            if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {

                $lastNamelength = strlen($userData["lastName"]);
                var_dump($lastNamelength);
                $firstNamelength = strlen($userData["firstName"]);
                $pseudolength = strlen($userData["pseudo"]);

                if($lastNamelength <= 60){
                    if($firstNamelength <= 65) {
                        if($pseudolength <= 60){

                            if($userData["email"] == $userData["email2"]) {

                                if(filter_var($userData["email"], FILTER_VALIDATE_EMAIL)) {

                                    if($userData["mdp"] == $userData["mdp2"]) {

                                        $query=$this->model->signInUser();
                                        $erreur = "Votre compte a bien été créé";

                                    } else {
                                        $erreur = "Vos mdp sont différents";
                                    }
                                } else {
                                    $erreur = "Ton adresse mail n'est pas valide !";
                                }

                            } else {
                                $erreur = "Vos adresses emails sont différentes";
                            }

                        } else {
                            $erreur = "Votre pseudo ne doit pas dépasser 60 caractères";
                        }
                    } else {
                        $erreur = "Votre Prénom ne doit pas dépasser 65 caractères";
                    }
                } else {
                    $erreur = "Votre Nom ne doit pas dépasser 60 caractères";
                }
            } else {
                $erreur = "*Tous les champs doivent être complétés";
            }

        require ROOT."/App/View/SignInView.php";
    }

}