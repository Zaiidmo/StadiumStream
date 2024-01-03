<?php

namespace App\Controller;

use App\Model\Permission;

class StadiumController
{
    public function index()
    {
        $Stadiumpage = new Permission();
        $role = $Stadiumpage->check();
        // If the user is logged in and has the role of admin (role_id = 2)
        if ($role == 2) {
            $stadiums = new StadiumModel();
            $stadiums = $stadiums->readTeams();
            include "../app/View/dashboard/stadiums.php";
        } else {
            // Handle other cases, or simply redirect if necessary
            $redirect = URL_DIR . 'signin';
            header("Location: $redirect");
        }
    }
}
