<?php
namespace App\Controller;

use App\Model\User;

class SigninController
{
    public function index()
    {
        include("../app/View/signin.php");
    }

    public function readUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userModel = new User();

        $users = $userModel->read('user');

        $foundUser = null;
        foreach ($users as $user) {
            if ($user['email'] === $email) {
                $foundUser = $user;
                break;
            }
        }
        if ($foundUser && password_verify($password, $foundUser['password'])) {
            $_SESSION['user_id'] = $foundUser['id'];
            $_SESSION['username'] = $foundUser['username'];
            $_SESSION['email'] = $foundUser['email'];

            header('Location: ../');
            exit();
        } else {
            $_SESSION['error'] = "Invalid email or password. Please try again.";
            header('Location: ../signin');
            exit();
        }
    }

}
