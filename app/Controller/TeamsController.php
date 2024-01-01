<?php 
namespace App\Controller;

use App\Model\TeamModel;
global $conn;
class TeamsController {
    public function index() {
        $teams = new TeamModel();
        $teams = $teams->readTeams();
        include "../app/View/dashboard/teams.php";
    }

}
