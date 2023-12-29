<?php

namespace App\Model;

use PDO;
use PDOException;

class TeamModel extends Crud
{
    public function readTeams()
    {
        return $this->read('team');
    }

    public function create($tableName, $data)
    {
        try {
            // Check if 'flag' key exists in $data and if it contains an image file
            if (isset($data['flag']) && is_uploaded_file($data['flag']['tmp_name'])) {
                $imageData = file_get_contents($data['flag']['tmp_name']);
                $data['flag'] = base64_encode($imageData);
            }

            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));

            $query = "INSERT INTO $tableName ($columns) VALUES ($values)";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($data);

            echo "Record added successfully!";
        } catch (PDOException $e) {
            // You might want to log the error or throw an exception
            echo "Error creating record: " . $e->getMessage();
        }
    }
}
