<?php
namespace App\Model;
use Core\Database;

// La classe HomeModel permet de faire le lien entre le bdd et le controller
class HomeModel extends Database {

    public function getOpenPolls(){

        // On lance la session pour récupérer les informations de l'utilisateur connecté
        session_start();

        if (!empty($_SESSION['user_id'])) {

        // On lance la session pour récupérer les informations de l'utilisateur connecté
        $userID = $_SESSION['user_id'];

        // On appelle la base de données
        $db = new Database;

        // On fait une requête SQL pour chercher les informations à afficher
        $query = $this->pdo->prepare(
            "SELECT creator_id, question, t_utilisateurs.pseudo, sondage_id
            FROM t_sondages
            INNER JOIN t_utilisateurs ON t_utilisateurs.user_id = t_sondages.creator_id
            WHERE creator_id = ? AND activite = 'open'
            ORDER BY creator_id");
        $query->execute(array($userID));

        // On return ce qu'on a récupéré
        return $query->fetchAll(\PDO::FETCH_OBJ);

        } else {
            echo("Il faut vous connecter ou vous inscrire!");
        }
    }

    public function getClosedPolls(){

        if (!empty($_SESSION['user_id'])) {
        // On lance la session pour récupérer les informations de l'utilisateur connecté
        $userID = $_SESSION['user_id'];

        // On appelle la base de données
        $db = new Database;

        // On fait une requête SQL pour chercher les informations à afficher
        $query = $this->pdo->prepare(
            "SELECT creator_id, question, t_utilisateurs.pseudo, sondage_id
            FROM t_sondages
            INNER JOIN t_utilisateurs ON t_utilisateurs.user_id = t_sondages.creator_id
            WHERE creator_id = ? AND activite = 'close'
            ");
        $query->execute(array($userID));

        // On return ce qu'on a récupéré
        return $query->fetchAll(\PDO::FETCH_OBJ);

    } else {
        echo("");
    }
    }
}