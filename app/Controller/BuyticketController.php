<?php
namespace App\Controller;

use App\Model\buyticketModel;
use App\Model\MatchModel;

class BuyticketController extends MatchModel{
    public function index($id){
        $obj = new buyticketModel();
        return $singlematch =  $obj->fetchSingleMatche($id);
        include "../app/View/buyticket.php";
    }



}