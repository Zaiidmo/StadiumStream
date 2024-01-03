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
        // $this->Image(URL_DIR ."public/assets/uploads/1vs1.jpg", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());

        // $this->Image("../../public/images/pngegg.png", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());




        // $this->Image("../../public/images/gg.png", 2, 2, 15, 10);
        // $this->SetY(8);
        // $this->Image("../../public/images/bal.png", -6, 20, 20, 20);
        // $this->Image("../../public/images/playerTT.png", 160, 15, 70, 70);


        $this->SetFont('poppins', '', 30);

        $this->SetXY(10, 10);
        $this->Cell(0, 8, 'Exciting moments', 0, 1, 'C');
        $this->SetFont('poppins', '', 30);

        $this->Cell(0, 8, 'Await  you', 0, 1, 'C');
        $this->SetFont('Poppins', '', 10);
        $this->SetTextColor(255, 255, 255);

        $this->SetFont('poppins', '', 15);
        $this->SetXY(98, 27);
        $this->Cell(0, 10, 'TICKET', 0, 1, 'G');

        $this->SetFont('Arial', '', 10);

        $this->SetXY(88, 34);
        $this->Cell(0, 8, 'Date: January 1, 2024', 0, 1, 'G');


        $this->SetXY(88, 40);

        $this->Cell(0, 8, 'Time : 00:00', 0, 1, 'G');

        $this->SetXY(88, 46);
        $this->Cell(0, 8, 'Team A vs Team B', 0, 1, 'G');

        $this->SetXY(88, 52);
        $this->Cell(0, 8, 'Venue : Stadium XYZ', 0, 1, 'G');

        $this->SetXY(88, 58);
        $this->Cell(0, 8, 'Ticket Number: 123456789', 0, 1, 'G');

        $this->SetXY(88, 64);
        $this->Cell(0, 8, 'Price : 25$', 0, 1, 'G');
    }
}

