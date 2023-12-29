<?php 
namespace App\Controller;

use App\Model\TeamModel;

class TeamsController {
    public function index() {
        $teams = new TeamModel();
        $teams = $teams->readTeams();
        include "../app/View/dashboard/teams.php";
    }

    public function addteam() {
        include "../app/View/dashboard/addteam.php";
    }
}
