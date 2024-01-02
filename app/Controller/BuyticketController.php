<?php
namespace App\Controller;

use App\Model\buyticketModel;
use App\Model\MatchModel;

class BuyticketController extends MatchModel{
    public function index($id){
        $obj = new buyticketModel();
        $singlematch =  $obj->fetchSingleMatche($id);
        // var_dump($singlematch);die;
        // echo $singlematch->team1;
        require "../app/View/buyticket.php";
    }



}