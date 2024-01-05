<?php

namespace App\Controller;

session_start();

use app\fpdf\TicketPDF;
use App\Model\buyticketModel;
use App\Model\MatchModel;
use Carbon\Carbon;

class BuyticketController extends MatchModel
{
    protected $userid;
    public function index($id)
    {
        $obj = new buyticketModel();
        $singlematch =  $obj->fetchSingleMatche($id);
        // var_dump($singlematch);die;
        // echo $singlematch->team1;
        
        require "../app/View/buyticket.php";

    }

    public function reserveTicket($id)
    {
        $ticket = new buyticketModel();
        $userid = $_SESSION['id'];
        $ticketid = $id . $userid . time();
        $uu_id = hash('sha1', $ticketid);
        $data = $ticket->fetchSingleMatche($id);
        $price = $data['price'];
        $gameTime = $data['matchDay'];
        $currentTime = Carbon::now();
        $remaining_days = $currentTime->diffInDays($gameTime, false);
        if ($remaining_days < 1) {
            $_SESSION['Remaining_days'] = $remaining_days;
            $_SESSION['error'] = "You can't reserve a ticket for this match";
            header("Location: " . URL_DIR . "home");
            exit();
        } else {
            $obj = new buyticketModel();
            $obj->reserveTicket($id, $userid, $uu_id, $price);
            $this->generateTicket($id);
        }
    }

    public function generateTicket($id)
    {
        $ticket = new buyticketModel();
        global $data;
        $data = $ticket->fetchSingleMatche($id);
        require '../app/PDF/pdf.php';
        $pdf = new TicketPDF();
        $pdf->SetAutoPageBreak(true, 0);
        $pdf->AddPage('L', array(250, 80));
        $pdf->SetFont('Arial', '', 12);
        $pdf->Output();
    }
}
