<?php

namespace App\Controller;

use App\Model\TeamModel;

class TeamsController
{
    public function index()
    {
        $teams = new TeamModel();
        $teams = $teams->readTeams();
        include "../app/View/dashboard/teams.php";
    }

    public function addteam()
    {
        include "../app/View/dashboard/addteam.php";
    }
    // Add a team to the database
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data
            $teamData = [
                'name' => $_POST['name'],
                'coach' => $_POST['coach'],
                'founded_year' => $_POST['Founding_Year'],
            ];

            if (isset($_FILES['flag']) && is_uploaded_file($_FILES['flag']['tmp_name'])) {
                $teamData['flag'] = $_FILES['flag'];
            }
            $teamModel = new TeamModel();

            $teamModel->create('teams', $teamData);
        }
    }
}
