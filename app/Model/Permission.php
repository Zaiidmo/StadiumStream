<?php

namespace App\Model;

use PDO;
use PDOException;

class Permission extends Crud
{
    public function check($Page)
    {
        if (isset($_SESSION['id'])) {
            $redirect = URL_DIR . 'signin';
            try {
                // Step 1: Query the user_role table for the role_id associated with the user
                $stmt = $this->pdo->prepare("SELECT * FROM user_role WHERE user_id = :id");
                $stmt->bindParam(':id', $_SESSION['id'], PDO::PARAM_STR);
                $stmt->execute();
                $userRole = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($userRole) {
                    // Step 2: Check the role_id and execute permissions accordingly
                    switch ($userRole['role_id']) {
                        case 1:
                            // User permissions
                            include "../app/View/home.php";
                            break;
                        case 2:
                            // Admin permissions
                            include "../app/View/dashboard/$Page.php";
                            break;
                            // Add more cases for other roles if needed

                        default:
                            // Default behavior if the role_id is not recognized
                            header("Location: $redirect");
                            break;
                    }
                }
            } catch (PDOException $e) {
                echo 'Database Error: ' . $e->getMessage();
                exit();
            }
        } else {
            // Redirect if the user is not logged in
            $redirect = URL_DIR . 'signin';
            header("Location: $redirect");
        }
    }
}
