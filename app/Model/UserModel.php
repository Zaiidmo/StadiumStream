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

    //     public function signin($email)
    //     {
    //         try {
    //             $query = "SELECT * FROM `user` WHERE email = $email ";


    //             $stmt = $this->pdo->query($query);

    //             $records = $stmt->fetch(PDO::FETCH_ASSOC);
    //             return $records;
    //         } catch (PDOException $e) {
    //             echo "Error fetching records: " . $e->getMessage();
    //             return []; // Return an empty array in case of an error
    //             // Log the error (you may want to use a logging library or write to a log file)
    //             error_log("Error fetching records: " . $e->getMessage());

    //             // Re-throw the exception to let the calling code handle it
    //             throw $e;
    //             echo "Error fetching records: " . $e->getMessage();
    //             return [];    }
    // }
    // }
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
