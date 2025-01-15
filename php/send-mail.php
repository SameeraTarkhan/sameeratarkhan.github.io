<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["UserSubmit"])) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'thrusameera@gmail.com';  // Use environment variables for security
        $mail->Password = 'Znsmzelnsss13';  // Use environment variables for security
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Sender's email
        $mail->setFrom($_POST["UserEmail"]);
        $mail->addAddress('thrusameera@gmail.com');  // Add a recipient

        // Prepare the body with the message and the user's email
        $messageBody = "<p><strong>User's Email:</strong> " . $_POST["UserEmail"] . "</p>";
        $messageBody .= "<p><strong>Subject:</strong> " . $_POST["subject"] . "</p>";
        $messageBody .= "<p><strong>Message:</strong><br>" . nl2br($_POST["message"]) . "</p>";

        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body = $messageBody;  // Set the body content

        $mail->send();
        echo 'Message has been sent successfully';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
