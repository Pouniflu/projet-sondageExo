<?php
namespace App\Model;
use Core\Database;

// La classe HomeModel permet de faire le lien entre le bdd et le controller
class HomeModel extends Database {

    public function getPolls(){

        // On lance la session pour récupérer les informations de l'utilisateur connecté
        session_start();

        $userID = $_SESSION['user_id'];
        $db = new Database;
        $query = $this->pdo->prepare(
            "SELECT * 
            FROM t_sondages
            WHERE creator_id = ?");
        $query->execute(array($userID));

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }
}