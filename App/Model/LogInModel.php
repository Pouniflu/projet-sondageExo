<?php

namespace App\Model;

use Core\Database;

class LogInModel extends Database {

    public function LogInUser(){


        session_start();


        if (isset($_POST['formConnexion'])) {
            $pseudoconnect = htmlspecialchars($_POST['pseudoConnect']);
            $passwordconnect = password_hash($_POST['passwordConnect'], PASSWORD_BCRYPT);
            if (!empty($pseudoconnect) and !empty($passwordconnect)) {
                $requser = $this->pdo->prepare("SELECT * FROM t_utilisateurs WHERE pseudo = ? AND password = ?");
                $requser->execute(array($pseudoconnect, $passwordconnect));
                $userexist = $requser->rowCount();
                if ($userexist == 1) {
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['id'];
                    $_SESSION['pseudo'] = $userinfo['pseudo'];
                    $_SESSION['password'] = $userinfo['password'];
                    header("Location: ?page=home");
                } else {
                    $message = "Mauvais pseudo ou mot de passe !";
                }
            } else {
                $message = "Tous les champs doivent être complétés !";
            }
        }


    }


}