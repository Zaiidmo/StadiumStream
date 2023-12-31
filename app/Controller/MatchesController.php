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


    public function addMatch()
    {
        // Create an instance of the TeamModel
        $matchobj = new MatchModel();

        // Initialize the $data array
        $data = [];

        // Check if the 'flag' file input is set and not empty
        if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
            // Process file upload here and store the file path in the $data array
            $flag = $_FILES['image'];
            $uploadDirectory = "C:/laragon/www/StadiumStream/public/assets/uploads/"; // Update this path to your local directory
            $filename = preg_replace("/[^a-zA-Z0-9]/", "_", $_POST['team1']) . "vs" .  preg_replace("/[^a-zA-Z0-9]/", "_", $_POST['team2']);
            $targetFileName = $uploadDirectory . $filename . "." . strtolower(pathinfo($flag['name'], PATHINFO_EXTENSION));

            if (move_uploaded_file($flag['tmp_name'], $targetFileName)) {
                // File uploaded successfully, add file path to the $data array
                $data['image'] = $filename . '.jpg';
            } else {
                // Handle file upload error
                echo 'File upload failed.';
                return;
            }
        }

        // Add other form fields to the $data array
        $data['team2'] = $_POST['team2'];
        $data['team1'] = $_POST['team1'];
        $data['time'] = $_POST['time'];
        $data['stade'] = $_POST['stade'];

        // Add other fields as needed

        // Use the addTeam method to insert data into the "team" table
        $matchobj->addMatch("match",$data);
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
