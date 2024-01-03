<?php 
namespace App\Controller;

use App\Model\HomeModel;

class HomeController {
    public function index() {
        $obj = new HomeModel();
        $matches =$obj->fetchAllMatches();
        include '../app/View/home.php';
    }

    public function liveSearch(){
        if(isset($_POST['query'])){
            $input = $_POST['query'];
            var_dump($input);die;
        }
    }
}
