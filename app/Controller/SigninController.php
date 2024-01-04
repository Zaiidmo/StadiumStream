<?php

namespace App\Controller;

use App\Model\UserModel;

session_start();
class SigninController
{
    public function index()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['id'])) {
            $redirect = URL_DIR . 'profile';
            header("Location: $redirect");
        } else {
            include("../app/View/signin.php");
        }
    }

    public function readUser()
    {
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
                    $password_incorect = 'Incorrect Password!';
                    $_SESSION['password_incorect'] = $password_incorect;
                    $redirect = URL_DIR . 'signin';
                    header("Location: $redirect");
                }
            } else {
                $user_not_found = 'User Not Found !!!';
                $_SESSION['user_not_found'] = $user_not_found;
                $redirect = URL_DIR . 'signin';
                header("Location: $redirect");
            }
        }
    }

    public function logout()
    {
        if (isset($_POST['logout'])) {
            // Unset all of the session variables
            $_SESSION = array();
            $redirect = URL_DIR . 'home';

            // If it's desired to kill the session, also delete the session cookie
            // Note: This will destroy the session, and not just the session data
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(
                    session_name(),
                    '',
                    time() - 42000,
                    $params["path"],
                    $params["domain"],
                    $params["secure"],
                    $params["httponly"]
                );
            }

            // Finally, destroy the session
            session_destroy();

            // Redirect to the login page or any other page after logout
            header("Location: $redirect");
            exit();
        }
    }

}
