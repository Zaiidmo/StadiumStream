<?php
namespace App\Model;
use config\Connection;
use PDO;
use PDOException;
class HomeModel extends MatchModel{
    public function fetchAllMatches(){
        return $this->fetchMatches();
     }

}