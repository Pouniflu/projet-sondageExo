<?php
namespace App\Model;
use Core\Database;

// La classe ResultPollModel permet de faire le lien entre le bdd et le controller
class ResultPollModel extends Database {

    // Création d'une fonction pour récupérer la question du sondage
    public function getQuestionPoll(){
        $query = $this->pdo->prepare(
            "SELECT question 
            FROM t_sondages
            WHERE sondage_id = ?"
            );
        
        $query->execute(array($_GET['sondage_id']));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Création d'une fonction pour récupérer les réponses du sondage
    public function getAnswersPoll(){
        $query = $this->pdo->prepare(
            "SELECT reponse 
            FROM t_reponses
            WHERE sondage_id = ?"
            );
        
        $query->execute(array($_GET['sondage_id']));
        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    // Création d'une fonction pour récupérer la durée du sondage
    public function getTimePoll(){
        $query = $this->pdo->prepare(
            "SELECT duree 
            FROM t_sondages
            WHERE sondage_id = ?"
            );
        
        $query->execute(array($_GET['sondage_id']));
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}