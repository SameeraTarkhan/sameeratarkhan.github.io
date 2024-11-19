<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["UserSubmit"])) {
    $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@ataatech.com';  // Use environment variables for security
        $mail->Password = 'qifp aeuw selj pjop';  // Use environment variables for security
        $mail->SMTPSecure = 'ssl';  // Enable TLS encryption
        $mail->Port = 465;

        $mail->setFrom($_POST["UserEmail"]);
        $mail->addReplyTo($userEmail);
        $mail->addAddress('admin@ataatech.com');  // Add a recipient
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body    = $_POST["message"];

        $mail->send();
}
?>