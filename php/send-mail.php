<?php
 require 'C:/Users/sameera13/Downloads/PHPMailer-master/PHPMailer-master/src/Exception.php';
 require 'C:/Users/sameera13/Downloads/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
 require 'C:/Users/sameera13/Downloads/PHPMailer-master/PHPMailer-master/src/SMTP.php';
 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 $mail = new PHPMailer(true);
 
 try {
     //Server settings
     $mail->isSMTP();
     $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to send through
     $mail->SMTPAuth = true;
     $mail->Username = 'thrusameera@gmail.com';  // SMTP username
     $mail->Password = 'izci zzdk yrvf zpzt';  // SMTP password
     $mail->SMTPSecure = 'tls';  // Enable TLS encryption
     $mail->Port = 587;
 
     //Recipients
     $mail->setFrom('sameeratarkhan13@gmail.com', 'Mailer');
     $mail->addAddress('thrusameera@gmail.com');  // Add a recipient    $mail->addAddress('sameera.tarkhan@ataatech.com');  // Add a recipient
 
     // Content
     $mail->isHTML(true);
     $mail->Subject = 'Subject';
     $mail->Body    = 'This is the HTML message body';
     $mail->AltBody = 'This is the plain text message body';
 
     $mail->send();
     echo 'Message has been sent';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }