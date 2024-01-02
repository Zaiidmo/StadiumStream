<?php

namespace App\Model;

use PDO;
use PDOException;

class UserModel extends Crud {
    public function displayusers(){
        return $this->read('user');
    }

    public function createUser($userData)
    {
        try {
            // var_dump($userData);
            return $this->create('user', $userData) !== false;
        } catch (PDOException $e) {
            echo "PDO Exception: " . $e->getMessage();
            return false;
        }
    }
    
    public function readUser()
    {
        return $this->read("user");
    }
}

