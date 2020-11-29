<?php
namespace App\Model;
use Core\Database;

// La classe HomeModel permet de faire le lien entre le bdd et le controller
class HomeModel extends Database {

    public function getPolls(){
        $db = new Database;
        $query = $this->pdo->query(
            "SELECT * 
            FROM t_sondages");
        return $query->fetchAll(\PDO::FETCH_OBJ);
    }
}