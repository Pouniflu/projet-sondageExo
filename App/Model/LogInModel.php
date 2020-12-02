<?php
namespace App\Model;
use Core\Database;

// La classe LogInModel permet de faire le lien entre le bdd et le controller
class LogInModel extends Database {

    public function LogInUser(){

        // On lance la session pour récupérer les informations de l'utilisateur connecté
        session_start();

        // Si l'utilisateur a appuyé sur le bouton "connexion"
        if (isset($_POST['formConnexion'])) {

            // On met les informations du pseudo et du password récupérées dans des variables
            $pseudoconnect = htmlspecialchars($_POST['pseudoConnect']);
            $passwordconnect = htmlspecialchars($_POST['passwordConnect']);

            // Si les informations récupérées dans les variables ne sont pas vides
            if (!empty($pseudoconnect) and !empty($passwordconnect)) {

                // On prépare la requête SQL
                $requser = $this->pdo->prepare(
                    "SELECT * 
                    FROM t_utilisateurs 
                    WHERE pseudo = ?"
                    );

                // On l'exécute
                $requser->execute(array($pseudoconnect));

                // On compte le nombre de ligne du tableau obtenu
                $userexist = $requser->rowCount();

                // S'il existe a une ligne
                if ($userexist == 1) {

                    // On récupère ladite ligne
                    $userinfo = $requser->fetch();

                    // Si le mot de passe coïncide avec celui de la bdd
                    if (password_verify($passwordconnect, $userinfo["password"])){

                        // On stocke les informations de l'utilisateur dans la session
                        $_SESSION['user_id'] = $userinfo['user_id'];
                        $_SESSION['pseudo'] = $userinfo['pseudo'];
                        $_SESSION['firstName'] = $userinfo['firstName'];
                        $_SESSION['lastName'] = $userinfo['lastName'];
                        $_SESSION['email'] = $userinfo['email'];
                        $_SESSION['password'] = $userinfo['password'];
                        header("Location: ?");

                    } else {
                        // Si le mdp n'est pas le même que celui dans la bdd
                        echo "Mauvais Mot de Passe !";
                    }
                } else {
                    // Si aucun pseudo ne correspond avec les informations de la bdd
                    echo "Aucun compte enregistré à ce pseudo !";
                }
            } else {
                // Si tous les champs ne sont pas complétés
                echo "Tous les champs doivent être complétés !";
            }
        }
    }
}