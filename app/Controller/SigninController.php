<?php

namespace App\Controller;

use App\Model\User;
use App\Model\UserModel;

class SigninController
{
    public function index()
    {
        include("../app/View/signin.php");
    }

    public function readUser()
    {
        session_start();
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userModel = new UserModel();
            $users = $userModel->signin($email);
            //Stocking DATA
            if ($users > 0) {
                $pwdCheck = password_verify($password, $users['password']);
                if ($pwdCheck) {
                    // Password is correct, set session variables
                    $redirect = URL_DIR . 'home';
                    $_SESSION['id'] = $users['id'];
                    $_SESSION['full_name'] = $users['full_name'];
                    $_SESSION['email'] = $users['email'];
                    $_SESSION['phone_number'] = $users['phone_number'];
                    // var_dump($_SESSION);
                    header("Location: $redirect");
                    // echo 'You have successfully logged in.';
                } else {
                    echo 'Incorrect Password!';
                }
            } else {
                echo 'User Not Found !!!';
            }
        }
    }


    // if ($foundUser && password_verify($password, $foundUser['password'])) {
    //     $_SESSION['id'] = $records['id'];
    //     $_SESSION['full_name'] = $foundUser['full_name'];
    //     $_SESSION['email'] = $foundUser['email'];
    //     $_SESSION['phone_number'] = $foundUser['phone_number'];
    //     $_SESSION['role'] = $foundUser['role'];
    //     $_SESSION['success'] = "You are successfuly logged in";

    //     header('Location: ../');
    //     exit();
    // } else {
    //     $_SESSION['error'] = "Invalid email or password. Please try again.";
    //     header('Location: ../signin');
    //     exit();
    // }
}
