<?php

namespace App\Controller;

use App\Model\UserModel;

class UsersController
{
    public function index()
    {
        $users = new UserModel();
        $users = $users->displayusers();
        include "../app/View/dashboard/users.php";
    }
}

