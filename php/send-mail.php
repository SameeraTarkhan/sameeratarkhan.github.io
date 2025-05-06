<?php

// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["UserSubmit"])) {
    $mail = new PHPMailer(true);
    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'thrusameera@gmail.com'; // Your Gmail address
        $mail->Password = 'izci zzdk yrvf zpzt'; // Replace with app password
        $mail->SMTPSecure = 'tls'; // Use 'tls' and port 587 if needed
        $mail->Port = 587;

        // Debug output for development
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';

        // Email headers
        $mail->setFrom('thrusameera@gmail.com', $_POST["UserName"]); // Always set from your Gmail
        $mail->addReplyTo($_POST["UserEmail"], $_POST["UserName"]);  // Allows you to reply to the user
        $mail->addAddress('thrusameera@gmail.com'); // Receiver email

        // Email body content
        $messageBody = "<p><strong>User's Name:</strong> " . htmlspecialchars($_POST["UserName"]) . "</p>";
        $messageBody .= "<p><strong>User's Email:</strong> " . htmlspecialchars($_POST["UserEmail"]) . "</p>";
        $messageBody .= "<p><strong>Subject:</strong> " . htmlspecialchars($_POST["subject"]) . "</p>";
        $messageBody .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($_POST["message"])) . "</p>";

        $mail->isHTML(true);
        $mail->Subject = htmlspecialchars($_POST["subject"]);
        $mail->Body = $messageBody;

        // Send the email
        $mail->send();
        echo 'Message has been sent successfully';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
