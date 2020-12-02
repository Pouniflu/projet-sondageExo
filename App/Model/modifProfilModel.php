<?php
namespace App\Model;
use Core\Database;

// On ouvre la session de l'utilisateur
session_start();

class ModifProfilModel extends Database
{
      // Création d'une méthode modifProfil()
      public function modifProfil() {
        
        if($_POST) {

            // Récupération du profil modifié
            $lastName = htmlspecialchars($_POST['lastName']);
            $firstName = htmlspecialchars($_POST['firstName']);
            $pseudo = htmlspecialchars($_POST['pseudo']);


            if (!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['pseudo'])) {
               
                // Injection SQL : envoi des nouvelles données dans la table t_utilisateurs
                $sendNewProfile = $this->pdo->prepare(
                    "UPDATE t_utilisateurs
                    SET lastName = 'test', firstName = $firstName, pseudo = $pseudo
                    WHERE user_id = $_SESSION['user_id'] ;
                ");
                $sendNewprofile->execute(array($_POST['lastName'], $_POST['firstName'], $_POST['pseudo']));

            } else {
                // Message pour avertir l'utilisateur qu'un ou plusieurs champs ne sont pas remplis.
                return "Un ou plusieurs champs ne sont pas pas remplis.";
            }
        }
    }

}
