<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

require 'c:\wamp64\apps\phpmyadmin5.2.1\vendor\autoload.php';

$headers = array('MIME-Version' => '1.0', 
                'Content-type' => 'text/html;charset=UTF-8'
                );

$htmlcontent = file_get_contents('mail/index.php');

//$messagedetails = "Compliment of the day $name. Your message on Isawumi, Abel Dayo's portfolio was sent successfully.<br><br> I really appreciate you for reaching out. I will get back to you within the shortest time possible where necessary.<br><br>Thank you very much once again and do enjoy what is left of your day. ";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings

    // For most clients expecting the Priority header:
    // 1 = High, 2 = Medium, 3 = Low
    $Priority = 1;
   
    $mail->IsSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dayoisawumi@gmail.com';                     //SMTP username
    $mail->Password   = 'jxyyikpxqdwgyoql';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS` (SMTPS)

    //Recipients
    $mail->setFrom('dayoisawumi@gmail.com', 'Isawumi, Abel Dayo');
    $mail->addAddress($email , $name);     //Add a recipient
   // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('dayoisawumi@gmail.com', 'Isawumi, Abel Dayo');
    //$mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');
   
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form';
    $mail->Body    = $htmlcontent;
    $mail->AltBody = 'This is a mail from Isawumi, Abel Dayo\'s portfolio';

    $mail->send();
    echo "Message has been sent";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>