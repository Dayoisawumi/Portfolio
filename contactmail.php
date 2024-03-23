<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

$messagedetails = "Compliment of the day Isawumi, Abel Dayo. You have a new message from your portfolio contact form.<br><br>

    Message Details<br>
            <hr><br>    
            Name: <b>  $name </b><br>
            Phone Number: <b> $phone </b><br>
            Email Address: <b> $email </b><br>
            Message: <b> $message </b><br>
            Date: <b> $udate </b><br><br>
            <hr><br>
 Thank you very much.<br> ";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings

    // For most clients expecting the Priority header:
    // 1 = High, 2 = Medium, 3 = Low
    $Priority = 1;
   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dayoisawumi@gmail.com';                     //SMTP username
    $mail->Password   = 'jxyyikpxqdwgyoql';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS` (SMTPS)

    //Recipients
    $mail->setFrom('dayoisawumi@gmail.com', 'My Portfolio');
    $mail->addAddress( 'dayoisawumi@gmail.com' , 'Isawumi, Abel Dayo');     //Add a recipient
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
    $mail->Body    = $messagedetails;
    $mail->AltBody = 'This is a mail from your portfolio';

    $mail->send();
    echo "Message has been sent";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>