<?php
namespace App\Controller;

class SignoutController
{
    public function index()
    {
        include("../app/View/signin.php");
    }
    public function logout()
    {
        session_start();

        if (isset($_POST['logout'])) {
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);
        
            header('Location: ../signin');
            exit();
        }
    }
}