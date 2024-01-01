<?php

namespace App\Controller;

use App\Model\TicketsModel;

class TicketsController
{
    public function index()
    {
        $tickets = new TicketsModel();
        $tickets = $tickets->displaytickets();
        include "../app/View/dashboard/tickets.php";
    }
    public function cancel($id)
    {
        $tickets = new TicketsModel();
        $tickets->cancel_ticket($id);
    }
}
