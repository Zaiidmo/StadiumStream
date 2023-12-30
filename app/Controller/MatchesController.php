<?php

namespace app\Controller;

use App\Model\MatchModel;

global $conn;
class MatchesController
{
    //get the View and fetching all data
    public function index()
    {
        $matche = new MatchModel;
        $matches = $matche->fetchMatches();
        $Teams = $matche->fetchTeams();
        $Stadiums = $matche->fetchStadiums();
        include '../app/View/dashboard/matches.php';
    }


    //adding match
    public function addMatch()
    {

        $matche = new MatchModel;
        $matches = $matche->addMatch("match", $_POST);
        header('Location: /StadiumStream/matches');
    }

    //delete match
    public function deleteMatch($id)
    {
        $match = new MatchModel;
        $match->deleteMatch("match", $id);
        header('Location: /StadiumStream/matches');
    }
}
