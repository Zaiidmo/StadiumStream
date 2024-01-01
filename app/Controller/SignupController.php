<?php
namespace App\Controller;

use App\Model\Users;

class SignupController
{
    public function index()
    {
        include("../app/View/signup.php");
    }
    public function registerUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            // Perform form validation
            $errors = [];

            if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
                $errors[] = "All fields are required";
            }

            if ($password !== $confirmPassword) {
                $errors[] = "Password and confirm password do not match";
            }

            if (count($errors) > 0) {
                // Display validation errors to the user
                $_SESSION['errors'] = $errors;

                // Redirect back to the signup page
                header('Location: ../app/View/signup.php');
                exit;
            }

            // If form validation passes, proceed with creating the user
            $userData = [
                'full_name' => $firstName . ' ' . $lastName,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $usersModel = new Users();
            $userCreated = $usersModel->createUser($userData);

            if ($userCreated) {
                // User created successfully, redirect to index page
                header('Location: ../../public/index.php');
                exit;
            } else {
                // Error creating user
                echo "Error creating user";
            }
        }
    }
}
