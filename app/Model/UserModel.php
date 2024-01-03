<?php

namespace App\Model;

use PDO;
use PDOException;

class UserModel extends Crud
{
    public function displayusers()
    {
        return $this->read('user');
    }

    public function createUser($userData)
    {
        try {
            return $this->create('user', $userData) !== false;
        } catch (PDOException $e) {
            echo "PDO Exception: " . $e->getMessage();
            return false;
        }
    }

    public function signin($email)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM user WHERE email = :email");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
            exit();
        }
    }
}
