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
            if (isset($data['flag']) && is_uploaded_file($data['flag']['tmp_name'])) {
                // Validate and sanitize the file 
                $imageData = file_get_contents($data['flag']['tmp_name']);
                $data['flag'] = base64_encode($imageData);
            }

            // Use parent class's create method
            parent::create($tableName, $data);

            echo "Record added successfully!";
        } catch (PDOException $e) {
            // Log the error or throw an exception for better error handling
            echo "Error creating record: " . $e->getMessage();
            // Alternatively, throw an exception:
            // throw new Exception("Error creating record: " . $e->getMessage());
        }
    }
}
