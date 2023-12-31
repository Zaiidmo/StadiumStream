<?php

namespace App\Controller;

use App\Model\Permission;
use App\Model\TeamModel;

class TeamsController
{
    public function index()
    {
        $teamspage = new Permission();
        $role = $teamspage->check();
        // If the user is logged in and has the role of admin (role_id = 2)
        if ($role == 2) {
            $teams = new TeamModel();
            $teams = $teams->readTeams();
            include "../app/View/dashboard/teams.php";
        } else {
            // Handle other cases, or simply redirect if necessary
            $redirect = URL_DIR . 'signin';
            header("Location: $redirect");
        }
    }

    //redirecting to the create fornm
    public function creationpage()
    {
        include "../app/View/dashboard/addteam.php";
    }
    // Add a team to the database
    public function createTeam()
    {
        // Create an instance of the TeamModel
        $teamModel = new TeamModel();

        // Initialize the $data array
        $data = [];

        // Check if the 'flag' file input is set and not empty
        if (isset($_FILES['flag']) && !empty($_FILES['flag']['tmp_name'])) {
            // Process file upload here and store the file path in the $data array
            $flag = $_FILES['flag'];
            $uploadDirectory = "C:/laragon/www/StadiumStream/public/assets/uploads/"; // Update this path to your local directory
            $filename = preg_replace("/[^a-zA-Z0-9]/", "_", $_POST['name']);
            $targetFileName = $uploadDirectory . $filename . "." . strtolower(pathinfo($flag['name'], PATHINFO_EXTENSION));

            if (move_uploaded_file($flag['tmp_name'], $targetFileName)) {
                // File uploaded successfully, add file path to the $data array
                $data['flag'] = $filename . '.jpeg';
            } else {
                // Handle file upload error
                echo 'File upload failed.';
                return;
            }
        }

        // Add other form fields to the $data array
        $data['name'] = $_POST['name'];
        $data['coach'] = $_POST['coach'];
        $data['founded_year'] = $_POST['founding_year'];

        // Add other fields as needed

        // Use the addTeam method to insert data into the "team" table
        $teamModel->addTeam($data);
        $redirect = URL_DIR . 'teams';
        header("Location: $redirect");
    }

    public function delete($id)
    {
        $teams = new TeamModel();
        $teams->deleteTeam($id);
    }

    // public function displayeditteam($id){
    //     $teams = new TeamModel();
    //     $teams = $teams->readTeams();

    // }

    public function editteam()
    {
        $teams = new TeamModel();
        $id = $_POST['id'];
        unset($_POST['id']);
        $teams->editTeam($_POST, $id);
    }
}
