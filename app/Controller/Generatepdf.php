<?php

namespace app\Controller;

use app\fpdf\pdfTicket;
use app\fpdf\TicketPDF;
use App\Model\buyticketModel;

class generatepdf
{
    public function index()
    {
        require "../app/FPDF/pdf.php";
    }

    public function generatepdf($id)
    {
        $obj = new buyticketModel();
        $singlematch = $obj->fetchSingleMatche($id);


        require "../app/FPDF/pdf.php";
        
        // Instantiate pdfTicket class
        $pdf = new TicketPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, 'Hello World!');
        $pdf->Output();
    }
}
