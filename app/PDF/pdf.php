<?php

namespace app\fpdf;

// session_start();

require '../app/PDF/FPDF/fpdf.php';
// require URL_DIR . 'app/PDF/fonts/Poppins-Regular.php' ;

use FPDF;

class TicketPDF extends FPDF
{

    function header()
    {
        global $data;
        $this->AddFont('poppins', '', 'Poppins-Regular.php');
        $this->AddFont('lilita', '', 'LilitaOne-Regular.php');

        $this->Image(URL_DIR . "public/assets/uploads/ticket.jpeg", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());
        $this->SetFont('Poppins', '', 7);

        $this->SetXY(18, 15);
        $this->Cell(0, 0, $data['matchDay'], 0, 1);

        $this->SetXY(18, 29);
        $this->Cell(0, 0, $data['stadiumName'], 0, 1, 'G');

        $this->SetXY(18, 44);
        $this->Cell(0, 0, $_SESSION['full_name'], 0, 1, 'G');

        $this->SetXY(18, 58);
        $this->Cell(0, 0, '#123456789', 0, 1, 'G');

        $this->SetFont('Poppins', '', 10);
        $this->SetXY(115, 15);
        $this->Cell(0, 0, $_SESSION['full_name'], 0, 1, 'L');

        //Price Holder 
        $this->SetFillColor(18, 78, 55);
        $this->Rect(100, 60, 22, 10, 'F');
        $this->SetFont('Poppins', '', 18);
        $this->SetFillColor(255, 255, 255);
        $this->SetXY(103, 65);
        $this->Cell(0, 0, '25 $', 0, 1, 'G');

        //Teams Data 
        $this->SetFont('Poppins', '', 15);
        $this->Image(URL_DIR . "public/assets/uploads/" . $data['flag1'], 100, 25, 18, 18, 'JPEG');
        $this->SetXY(98, 48);
        $this->Cell(0, 0, $data['team1'], 0, 1, 'G');
        $this->Image(URL_DIR . "public/assets/uploads/" . $data['flag2'], 148, 25, 18, 18, 'JPEG');
        $this->SetXY(145, 48);
        $this->Cell(0, 0, $data['team2'], 0, 1, 'G');
    }
}
