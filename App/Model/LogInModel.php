<?php

namespace App\Model;

use Core\Database;

class LogInModel extends Database {

    public function LogInUser(){


        session_start();


        if (isset($_POST['formConnexion'])) {
            $pseudoconnect = htmlspecialchars($_POST['pseudoConnect']);
            $passwordconnect = htmlspecialchars($_POST['passwordConnect']);
            if (!empty($pseudoconnect) and !empty($passwordconnect)) {
                $requser = $this->pdo->prepare("SELECT * FROM t_utilisateurs WHERE pseudo = ?");
                $requser->execute(array($pseudoconnect));
                $userexist = $requser->rowCount();
                if ($userexist == 1) {
                    $userinfo = $requser->fetch();
                    if (password_verify($passwordconnect, $userinfo["password"])){
                        $_SESSION['id'] = $userinfo['id'];
                        $_SESSION['pseudo'] = $userinfo['pseudo'];
                        $_SESSION['password'] = $userinfo['password'];
                        header("Location: ?page=home");
                    } else {
                        $message = "Mauvais Mot de Passe !";
                    }

                } else {
                    $message = "Mauvais pseudo ou mot de passe !";
                }
            } else {
                $message = "Tous les champs doivent être complétés !";
            }
        }
    }
}