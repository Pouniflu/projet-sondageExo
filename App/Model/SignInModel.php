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
                "password" => password_hash($_POST['password'], PASSWORD_BCRYPT),
                "password2" => password_hash($_POST['password2'], PASSWORD_BCRYPT),
            ];

            if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['password']) AND !empty($_POST['password2'])) {
                $lastNamelength = strlen($userData["lastName"]);
                $firstNamelength = strlen($userData["firstName"]);
                $pseudolength = strlen($userData["pseudo"]);

                if($lastNamelength <= 60){
                    if($firstNamelength <= 65) {
                        if($pseudolength <= 60){

                            if($userData["email"] == $userData["email2"]) {

                                if(filter_var($userData["email"], FILTER_VALIDATE_EMAIL)) {

                                    if($_POST["password"] == $_POST["password2"]) {
                                        $insertmbr = $this->pdo->prepare("INSERT INTO t_utilisateurs(lastName, firstName, pseudo, email, password) VALUES(?, ?, ?, ?, ?)");
                                        $catch = $insertmbr->execute(array($userData["lastName"], $userData["firstName"], $userData["pseudo"], $userData["email"], $userData["password"]));
                                        if (!$catch) {
                                            return "Ce pseudo est déjà utilisé";
                                        }
                                        return "Votre compte a bien été créé";

                                    } else {
                                        return "Vos mdp sont différents";
                                    }
                                } else {
                                    return "Ton adresse mail n'est pas valide !";
                                }

                            } else {
                                return "Vos adresses emails sont différentes";
                            }

                        } else {
                            return "Votre pseudo ne doit pas dépasser 60 caractères";
                        }
                    } else {
                        return "Votre Prénom ne doit pas dépasser 65 caractères";
                    }
                } else {
                    return "Votre Nom ne doit pas dépasser 60 caractères";
                }



            } else {
                return "*Tous les champs doivent être complétés";
            }
        }

    }
}