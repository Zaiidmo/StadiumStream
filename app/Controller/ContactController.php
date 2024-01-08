<?php
namespace App\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController
{
    public function index()
    {
        include("../app/View/contact.php");
    }

    public function send_mail()
    {
        // Process form data
        $sender_email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $full_name = $first_name . ' ' . $last_name;

        $mail = new PHPMailer(true);

        try {
            // Configure PHPMailer to send the initial email
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your email'; // Replace with your email
            $mail->Password = 'put your stmp pass'; // Replace with your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            $mail->setFrom('your email', 'your name'); // Replace with your email and name
            $mail->addAddress('your email', 'your name'); // Replace with recipient's email and name
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = "From: $full_name\nEmail: $sender_email\n\n$message";
            $mail->send();

            // Send the confirmation email to the sender
            $confirmation_mail = new PHPMailer(true);
            $confirmation_mail->isSMTP();
            $confirmation_mail->Host = 'smtp.gmail.com';
            $confirmation_mail->SMTPAuth = true;
            $confirmation_mail->Username = 'your email'; // Replace with your email
            $confirmation_mail->Password = 'put your stmp pass'; // Replace with your email password
            $confirmation_mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $confirmation_mail->Port = 465;
            $confirmation_mail->setFrom('your email', 'your name'); // Replace with your email and name
            $confirmation_mail->addAddress($sender_email); // Set the sender's email as the recipient
            $confirmation_mail->isHTML(true);
            $confirmation_mail->Subject = 'Confirmation: Your Email has been Received';
            $confirmation_mail->Body = 'Thank you for contacting us. Your email has been received.';
            $confirmation_mail->send();

            // echo 'Message has been sent';
            $redirect = URL_DIR."contact";
            header("Location: $redirect");

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
