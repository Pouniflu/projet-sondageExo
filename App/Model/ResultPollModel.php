<?php
namespace App\Model;
use Core\Database;

// La classe HomeModel permet de faire le lien entre le bdd et le controller
class ResultPollModel extends Database {

    public function getQuestionPoll(){
        $query = $this->pdo->prepare(
            "SELECT question 
            FROM t_sondages
            WHERE sondage_id = ?"
            );
        
        $query->execute(array($_GET['sondage_id']));

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getAnswersPoll(){
        $query = $this->pdo->prepare(
            "SELECT réponse 
            FROM t_reponses
            WHERE sondage_id = ?"
            );
        
        $query->execute(array($_GET['sondage_id']));

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }
}