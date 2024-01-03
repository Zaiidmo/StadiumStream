<?php
namespace App\Controller;

use App\Model\Permission;

class AddStadiumController{
    public function index(){
        include "../app/View/dashboard/AddStadium.php";


        include "../app/View/dashboard/AddStadium.php";
        $Addpage = new Permission();
        $Addpage->check('addStadium');
    }
}
