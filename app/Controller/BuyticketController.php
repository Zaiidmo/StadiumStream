<?php

namespace App\Controller;


use app\fpdf\TicketPDF;
use App\Model\buyticketModel;
use App\Model\MatchModel;

class BuyticketController extends MatchModel
{
    public function index($id)
    {
        $obj = new buyticketModel();
        $singlematch =  $obj->fetchSingleMatche($id);
        // var_dump($singlematch);die;
        // echo $singlematch->team1;
        require "../app/View/buyticket.php";
    }


    public function generateTicket()
    {
        $id = $_GET['id'];
        $ticket = new buyticketModel();
        $ticket->fetchSingleMatche($id);
        require '../app/PDF/pdf.php';
        $pdf = new TicketPDF();
        $pdf->SetAutoPageBreak(true, 0);
        $pdf->AddPage('L', array($pdf->GetPageWidth(), 80));
        $pdf->SetFont('Arial', '', 12);
        $pdf->Output();
    }
}
