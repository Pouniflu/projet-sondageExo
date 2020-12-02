<?php
namespace App\Model;
use Core\Database;

class CreatePollModel extends Database {

    // Création d'une méthode createPoll()
    public function createPoll() {
        
        // On ouvre la session de l'utilisateur connecté pour pouvoir récupérer par la suite ses informations
        session_start();

        if($_POST) {

            // Récupération de la question posée
            $question = htmlspecialchars($_POST['question']);

            // Récupération de toutes les réponses dans un tableau answers
            $answers = [
                "answer1" => htmlspecialchars($_POST['answer1']),
                "answer2" => htmlspecialchars($_POST['answer2']),
                "answer3" => htmlspecialchars($_POST['answer3']),
                "answer4" => htmlspecialchars($_POST['answer4'])
            ];

            if(!empty($_SESSION)) {
                if (!empty($_POST['question']) AND !empty($_POST['answer1']) AND !empty($_POST['answer2']) AND !empty($_POST['answer3']) AND !empty($_POST['answer4'])) {
               
                    // Injection SQL : envoi de la question et de la durée dans la table t_sondages
                    $sendQuestion = $this->pdo->prepare(
                        "INSERT INTO t_sondages (creator_id, question, duree, activite)
                        VALUE (?, ?, ?, 'open')
                    ");
                    $sendQuestion->execute(array($_SESSION['user_id'], $_POST['question'], $_POST['duree']));
    
                    // Select du sondage ID créé
                    // lastInsertId() permet de récupérer le dernier auto-increment inséré dans la table
                    $selectPollID = $this->pdo->lastInsertId();
    
                    // Injection SQL : envoi des réponses dans la table t_reponses
                    $sendAnswers = $this->pdo->prepare(
                        "INSERT INTO t_reponses (sondage_id, reponse)
                        VALUE (?, ?)
                        ");
                    $sendAnswers->execute(array($selectPollID, $answers['answer1']));
                    $sendAnswers->execute(array($selectPollID, $answers['answer2']));
                    $sendAnswers->execute(array($selectPollID, $answers['answer3']));
                    $sendAnswers->execute(array($selectPollID, $answers['answer4']));
    
                    // Message pour avertir l'utilisateur que le sondage a bien été créé
                    return "Le sondage a bien été créé !";
    
                } else {
                    // Message pour avertir l'utilisateur qu'un ou plusieurs champs ne sont pas remplis.
                    return "Un ou plusieurs champs ne sont pas pas remplis.";
                }
            } else {
                // Message pour avertir l'utilisateur qu'il n'est pas connecté.
                return "Vous devez d'abord vous connecter !";
            }
            
        }
    }
}