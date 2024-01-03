<?php

namespace App\Controller;

use App\Model\Permission;

class DashboardController
{
    public function index()
    {
        $dashboard = new Permission();
        $role = $dashboard->check();

        // If the user is logged in and has the role of admin (role_id = 2)
        if ($role == 2) {
            include "../app/View/dashboard/dashboard.php";
        } else {
            // if the user is not an admin 
            $redirect = URL_DIR . 'error404';
            header("Location: $redirect");
        }
    }
}
