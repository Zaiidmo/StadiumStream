<?php
namespace App\Controller;

use App\Model\Statistics;

class DashboardController
{
    public function index()
    {
        $statisticsModel = new Statistics();

        $totalUsersData = $statisticsModel->getTotalUsers();
        $totalTeamsData = $statisticsModel->getTotalTeams();
        $totalGamesData = $statisticsModel->getTotalGames();
        $soldTicketsCountData = $statisticsModel->getSoldTicketsCount();

        $totalUsers = $totalUsersData['totalUsers'];
        $totalTeams = $totalTeamsData['totalTeams'];
        $totalMatches = $totalGamesData['totalMatches'];
        $soldTicketsCount = $soldTicketsCountData['soldTicketsCount'];

        include "../app/View/dashboard/dashboard.php";
    }
}
