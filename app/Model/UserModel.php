<?php

namespace App\Model;

use PDO;
use PDOException;

class UserModel extends Crud {
    public function displayusers(){
        return $this->read('user');
    }
}