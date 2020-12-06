<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'PHPMailerTest/PHPMailer/src/Exception.php';
require 'PHPMailerTest/PHPMailer/src/PHPMailer.php';
require 'PHPMailerTest/PHPMailer/src/SMTP.php';
 
// Instantiation and passing [ICODE]true[/ICODE] enables exceptions
$mail = new PHPMailer(true);
 
try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hemanthkrish99@gmail.com';                     // SMTP username
    $mail->Password   = '8147hEm@nTh';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('hemanthkrish99@gmail.com', 'Mailer');
    $mail->addAddress('1ms17ec033@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('auroratv360@gail.com.com');               // Name is optional
    $mail->addReplyTo('info@gmail.com', 'Information');
    $mail->addCC('cc@gmail.com');
    $mail->addBCC('bcc@gmail.com');
 
    // Attachments
   // $mail->addAttachment('/home/cpanelusername/attachment.txt');         // Add attachments
    //$mail->addAttachment('/home/cpanelusername/image.jpg', 'new.jpg');    // Optional name
 
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
 
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
