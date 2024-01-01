<?php 
namespace App\Controller;

use App\Model\HomeModel;

class HomeController {
    public function index() {
        $obj = new HomeModel();
        $matches = $obj->fetchAllMatches();
        include '../app/View/home.php';
    }
}
