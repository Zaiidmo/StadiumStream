<?php

namespace App\Model;

use App\Model\Crud;

class Statistics extends Crud
{
    public function getTotalUsers()
    {
        return ['totalUsers' => $this->show_stats('user')];
    }

    public function getTotalTeams()
    {
        return ['totalTeams' => $this->show_stats('team')];
    }

    public function getTotalGames()
    {
        return ['totalMatches' => $this->show_stats('match')];
    }

    public function getSoldTicketsCount()
    {
        return ['soldTicketsCount' => $this->show_stats('ticket', 'WHERE status = "sold"')];
    }
    public function getCapacity()
    {
        // return ['canTicketsCount' => $this->show_stats('ticket', 'WHERE status = "canceled"')];
        return ['canTicketsCount' => $this->show_stats('ticket', 'WHERE status = "canceled"')];
    }
}
