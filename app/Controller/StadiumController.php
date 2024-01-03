<?php

namespace App\Controller;

use App\Model\Permission;

class StadiumController
{
    public function index()
    {
        $Stadiumpage = new Permission();
        $Stadiumpage->check('stadium');
    }
}
