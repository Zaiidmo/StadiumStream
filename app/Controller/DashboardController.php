<?php

namespace App\Controller;

use App\Model\Permission;

class DashboardController
{
    public function index()
    {
        $dashboard = new Permission();
        $dashboard->check();
    }
}
