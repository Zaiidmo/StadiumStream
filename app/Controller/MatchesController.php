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


    public function addMatch(){

        $matchobj = new MatchModel();

        $data = [];

        if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
            
            $flag = $_FILES['image'];
            $uploadDirectory = "C:/laragon/www/StadiumStream/public/assets/uploads/"; // Update this path to your local directory
            $filename = preg_replace("/[^a-zA-Z0-9]/", "_", $_POST['team1']) . "vs" .  preg_replace("/[^a-zA-Z0-9]/", "_", $_POST['team2']);
            $targetFileName = $uploadDirectory . $filename . "." . strtolower(pathinfo($flag['name'], PATHINFO_EXTENSION));

            if (move_uploaded_file($flag['tmp_name'], $targetFileName)) {
                $data['image'] = $filename . '.jpg';
            } else {
                echo 'File upload failed.';
                return;
            }
        }

        $data['team2'] = $_POST['team2'];
        $data['team1'] = $_POST['team1'];
        $data['time'] = $_POST['time'];
        $data['stade'] = $_POST['stade'];

        
        $matchobj->addMatch("match", $data);
        header('Location: /StadiumStream/matches');
    }


    //delete match
    public function deleteMatch($id)
    {
        $match = new MatchModel;
        $match->deleteMatch("match", $id);
        header('Location: /StadiumStream/matches');
    }
    //update match
    public function updateMatch($id){
        $matche = new MatchModel;
        $Teams = $matche->fetchTeams();
        $Stadiums = $matche->fetchStadiums();
        $selectedmatch = $matche->updateMatch("match",$id);
        // var_dump($selectedmatch);die;
        include '../app/View/dashboard/updateMatch.php';    
    }
    public function submitUpdateMatch(){
        $match = new MatchModel();
        $id = $_POST['id'];
        unset($_POST['id']);
        $match->submitUpdateMatch("match",$_POST,$id);
        header('Location: /StadiumStream/matches');

    }
}
