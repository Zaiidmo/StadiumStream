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

        $this->Image(URL_DIR . "public/assets/uploads/ticket.jpg", 0, 0, $this->GetPageWidth(), $this->GetPageHeight());
        $this->SetFont('Poppins', '', 10);

        $this->SetXY(10, 13);
        $this->Cell(0, 0, $data['matchDay'], 0, 1);

        $this->SetXY(10, 29);
        $this->Cell(0, 0, $data['T_date'], 0, 1, 'G');

        $this->SetXY(10, 43);
        $this->Cell(0, 0, $data['price'] . '$', 0, 1, 'G');

        $this->SetXY(10, 42);
        $this->Cell(30, 30, $data['stadiumName'],0.1);

        $this->SetXY(10, 72);
        $this->Cell(0, 0, $_SESSION['full_name'], 0, 1, 'G');
        // $this->SetFont('Poppins', '', 10);
        // $this->SetXY(115, 15);
        // $this->Cell(0, 0, $_SESSION['full_name'], 0, 1, 'L');

        //Stadium Holder 
        $this->SetFont('Poppins', '', 15);
        $this->SetXY(120, 63);
        $this-> SetTextColor(255,255,255);
        $this->Cell(0, 0, $data['stadiumName'], 0, 1, 'G');

        $this->SetFont('Poppins', '', 10);
        $this->SetXY(120,76);
        $this->Cell(0, 0, $data['uu_id'], 0, 1, 'G');
        

        //Teams Data 
        $this->SetTextColor(0,0,0);
        $this->SetFont('Poppins', '', 15);
        $this->Image(URL_DIR . "public/assets/uploads/" . $data['flag1'], 135, 25, 18, 18, 'JPEG');
        $this->SetXY(131, 47);
        $this->MultiCell(30, 5, $data['team1'], 0, 'C');
        $this->Image(URL_DIR . "public/assets/uploads/" . $data['flag2'], 185, 25, 18, 18, 'JPEG');
        $this->SetXY(180, 51    );
        $this->MultiCell(0, 0, $data['team2'], 0, 1, 'G');
    }
}
