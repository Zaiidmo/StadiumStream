<?php
namespace App\Controller;

use App\Model\Permission;

class AddStadiumController{
    public function index(){
        $Addpage = new Permission();
        $Addpage->check('addStadium');
    }
}
