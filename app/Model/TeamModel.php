<?php 

namespace App\Model;
class TeamModel extends Crud {
    public function readTeams(){
        return $this->read('team');
    }
}