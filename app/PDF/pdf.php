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
        $this->AddFont('lilita', '', 'LilitaOne-Regular.php');
        // $image_url= $singlematch['image'];

        // $this -> SetFillColor(18, 78, 55);
        // $this -> Rect(0,0, $this -> GetPageWidth(),50,'F');
        $this->Image(URL_DIR . "public/assets/uploads/ticket.jpeg", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());
        // $this->Image("../../public/images/pngegg.png", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());
        // $this->Image("../../public/images/gg.png", 2, 2, 15, 10);
        // $this->SetY(8);
        // $this->Image("../../public/images/bal.png", -6, 20, 20, 20);
        // $this->Image("../../public/images/playerTT.png", 160, 15, 70, 70);
        // $this->SetFillColor(18, 78, 55);
        // $this->Rect(0, 0, 150, $this->GetPageHeight(), 'F');

        // $this->SetFont('lilita', '', 30);
        // $this->SetXY(10, 10);
        // $this->Cell(0, 8, 'FOOTBALL MATCH', 0, 1, 'L');

        $this->SetFont('Poppins', '', 7);

        $this->SetXY(18, 15);
        $this->Cell(0, 0, 'January 1, 2024 | ', 0, 1);

        $this->SetXY(18, 29);
        $this->Cell(0, 0, 'Venue : Stadium XYZ', 0, 1, 'G');

        $this->SetXY(18, 44);
        $this->Cell(0, 0, 'User Full Name ', 0, 1, 'G');

        $this->SetXY(18, 58);
        $this->Cell(0, 0, '#123456789', 0, 1, 'G');

        //Price Holder 
        $this->SetFillColor(18, 78, 55);
        $this->Rect(100, 60, 25, 10, 'F');
        $this->SetFont('Poppins', '', 18);
        $this->SetFillColor(255, 255, 255);
        $this->SetXY(103, 65);
        $this->Cell(0, 0, '25 $', 0, 1, 'G');

        //Teams Data 
        $this->SetFont('Poppins', '', 15);
        $this->SetXY(145, 48);
        $this->Cell(0, 0, 'Team B', 0, 1, 'G');
        $this->SetXY(100, 48);
        $this->Cell(0, 0, 'Team A', 0, 1, 'G');
    }
}
