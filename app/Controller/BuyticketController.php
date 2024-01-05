<?php

namespace App\Controller;

session_start();

use App\Controller\PayPalHandler;
use app\fpdf\TicketPDF;
use App\Model\buyticketModel;
use App\Model\MatchModel;
use Carbon\Carbon;
use PDOException;

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
        }

        // Ticket reservation logic
        $obj = new buyticketModel();
        $obj->reserveTicket($id, $userid, $uu_id, $price);

        // PayPal payment initiation logic
        $this->initiatePayPalPayment($id);
    }

    private function initiatePayPalPayment($id)
    {
        $payment = new PayPalHandler();

        // Fetch ticket details, price, and description dynamically
        $ticketAmount = 50;  // Replace with actual ticket amount
        $ticketDescription = 'Game Ticket';  // Replace with actual ticket description

        try {
            // Create a PayPal payment and get the approval URL
            $approvalUrl = $payment->createPayment($ticketAmount, $ticketDescription);

            // Store necessary information in session for ticket generation
            $_SESSION['ticket_id'] = $id;
            $_SESSION['ticket_amount'] = $ticketAmount;
            $_SESSION['ticket_description'] = $ticketDescription;

            // Redirect the user to PayPal approval page
            header("Location: $approvalUrl");
            exit();
        } catch (PDOException $ex) {
            echo "Error: " . $ex->getMessage();
            // Handle the error appropriately (redirect, display an error message, log, etc.)
        }
    }

    // Additional function to be called after successful PayPal payment
    public function handleSuccessfulPayment()
    {
        // Check if necessary information is in session for ticket generation
        if (isset($_SESSION['ticket_id'], $_SESSION['ticket_amount'], $_SESSION['ticket_description'])) {
            $id = $_SESSION['ticket_id'];
            $this->generateTicket($id);

            // Clear the session variables to prevent duplicate ticket generation
            unset($_SESSION['ticket_id'], $_SESSION['ticket_amount'], $_SESSION['ticket_description']);
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
