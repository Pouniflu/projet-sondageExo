<?php
namespace App\Model;
use Core\Database;

class CreatePollModel extends Database {

    public function createPoll() {
        
        if($_POST) {
            $question = htmlspecialchars($_POST['question']);
            var_dump($_POST);

            $answers = [
                "answer1" => htmlspecialchars($_POST['answer1']),
                "answer2" => htmlspecialchars($_POST['answer2']),
                "answer3" => htmlspecialchars($_POST['answer3']),
                "answer4" => htmlspecialchars($_POST['answer4'])
            ];

            if (!empty($_POST['question']) AND !empty($_POST['answer1']) AND !empty($_POST['answer2']) AND !empty($_POST['answer3']) AND !empty($_POST['answer4'])) {
               
                // Injection SQL
                $sendQuestion = $this->pdo->prepare(
                    "INSERT INTO t_sondages (question)
                    VALUE (?)
                ");
                $sendQuestion->execute($question);

                // $sendAnswers = $this->pdo->prepare(
                //     "INSERT INTO t_reponses (reponse)
                //     VALUE (?)
                //     INNER JOIN 
                //     ")

            } else {
                return "Un champ n'est pas rempli";
            }
        }
    }
}