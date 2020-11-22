<?php

namespace App\Model;

use Core\Database;

class SignInModel extends Database {

    public function signInUser(){
        if(isset($_POST['formInscription']))
        {
            $userData = [
                "firstName" => htmlspecialchars($_POST['firstName']),
                "lastName" => htmlspecialchars($_POST['lastName']),
                "pseudo" => htmlspecialchars($_POST['pseudo']),
                "email" => htmlspecialchars($_POST['email']),
                "email2" => htmlspecialchars($_POST['email2']),
                "mdp" => password_hash($_POST['mdp'], PASSWORD_BCRYPT),
                "mdp2" => password_hash($_POST['mdp2'], PASSWORD_BCRYPT),
            ];

            if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {

                $lastNamelength = strlen($userData["lastName"]);
                $firstNamelength = strlen($userData["firstName"]);
                $pseudolength = strlen($userData["pseudo"]);

                if($lastNamelength <= 60){
                    if($firstNamelength <= 65) {
                        if($pseudolength <= 60){

                            if($userData["email"] == $userData["email2"]) {

                                if(filter_var($userData["email"], FILTER_VALIDATE_EMAIL)) {

                                    if($userData["mdp"] == $userData["mdp2"]) {

                                        $insertmbr = $this->prepare("INSERT INTO t_utilisateurs(lastName, firstName, pseudo, email, mdp) VALUES(?, ?, ?, ?, ?)");
                                        $insertmbr->execute(array($userData["lastName"], $userData["firstName"], $userData["pseudo"], $userData["email"], $userData["mdp"]));
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
        }

    }
}