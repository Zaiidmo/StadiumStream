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

    public function logout()
    {
        if (isset($_POST['logout'])) {
            session_start();
            // Unset all of the session variables
            $_SESSION = array();
            $redirect = URL_DIR . 'home';
        
            // If it's desired to kill the session, also delete the session cookie
            // Note: This will destroy the session, and not just the session data
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
        
            // Finally, destroy the session
            session_destroy();
        
            // Redirect to the login page or any other page after logout
            header("Location: $redirect");
            exit();
        }
        // session_start();
        // session_unset();
        // session_destroy();
        // header('Location: ../signin');
    }

}