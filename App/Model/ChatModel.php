<?php
namespace App\Model;
use Core\Database;

// La classe ChatModel permet de faire le lien entre le bdd et le controller
class ChatModel extends Database {

    public function getMessages() {
        $query = $this->pdo->query(
            "SELECT * 
            FROM t_tchat");
        $query->fetchAll(\PDO::FETCH_ASSOC);
        echo json_encode($query->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function postMessage($data) {
        $prepare = $this->pdo->prepare(
            "INSERT INTO t_tchat (content) 
            VALUES (:content)");
        $prepare->execute($data);
        echo json_encode("");
    }
}