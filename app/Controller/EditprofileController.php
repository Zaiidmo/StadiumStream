<?php

namespace App\Controller;

class EditprofileController
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            include "../app/View/Editprofile.php";
        } else {
            $redirect = URL_DIR . 'signin';
            header("Location: $redirect");
        }
    }
}
