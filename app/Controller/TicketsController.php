<?php

namespace App\Controller;

use App\Model\Permission;
use App\Model\TicketsModel;

class TicketsController
{
    public function index()
    {
        $ticketspage = new Permission();
        $ticketspage->check('tickets');
        $tickets = new TicketsModel();
        $tickets = $tickets->displaytickets();
    }
    public function cancel($id)
    {
        $tickets = new TicketsModel();
        $tickets->cancel_ticket($id);
    }
}
