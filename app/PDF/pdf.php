<?php

namespace app\fpdf;

require '../app/PDF/FPDF/fpdf.php';
// require URL_DIR . 'app/PDF/fonts/Poppins-Regular.php' ;

use FPDF;

class TicketPDF extends FPDF
{

    function Header()
    {
        $this->AddFont('poppins', '', 'Poppins-Regular.php');
        // $image_url= $singlematch['image'];

        // $this -> SetFillColor(18, 78, 55);
        // $this -> Rect(0,0, $this -> GetPageWidth(),50,'F');
        $this->Image(URL_DIR . "public/assets/uploads/ticket.jpeg", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());
        // $this->Image("../../public/images/pngegg.png", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());
        // $this->Image("../../public/images/gg.png", 2, 2, 15, 10);
        // $this->SetY(8);
        // $this->Image("../../public/images/bal.png", -6, 20, 20, 20);
        // $this->Image("../../public/images/playerTT.png", 160, 15, 70, 70);


        $this->SetFont('poppins', '', 30);
        $this->SetXY(10, 10);
        $this->Cell(0, 8, 'FOOTBALL MATCH', 0, 1, 'L');
        $this->SetFont('poppins', '', 30);

        $this->SetFont('Poppins', '', 15);

        $this->SetXY(16, 28);
        $this->Cell(0, 0, 'Date: January 1, 2024', 0, 1, 'G');

        $this->SetXY(16, 35);
        $this->Cell(0, 0, 'Time : 00:00', 0, 1, 'G');

        $this->SetXY(16, 42);
        $this->Cell(0, 0, 'Team A vs Team B', 0, 1, 'G');

        $this->SetXY(16, 49);
        $this->Cell(0, 0, 'Venue : Stadium XYZ', 0, 1, 'G');

        $this->SetXY(16, 56);
        $this->Cell(0, 0, 'Ticket Id: 123456789', 0, 1, 'G');

        $this->SetXY(16, 63);
        $this->Cell(0, 0, 'Price : 25$', 0, 1, 'G');

        $this->SetFillColor(18, 78, 55);
        $this->Rect(0, 70, $this->GetPageWidth(), 15, 'F');
    }
}
