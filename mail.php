<?php


//Include packages and files for PHPMailer and SMTP protocol
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require_once 'helperfunctions.php';


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Refer to https://github.com/PHPMailer/PHPMailer
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();                                    //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';               //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                           //Enable SMTP authentication
    $mail->Username   = 'sdvsdv123321@gmail.com';       //SMTP username
    $mail->Password   = 'fontawesome#651343';           //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable implicit TLS encryption
    $mail->Port       = 587;                            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Add reply to
    $mail->ClearReplyTos();
    $mail->addReplyTo($email, $name);

    //Add a sender
    $mail->setFrom($email, $name);

    //Add a recipient
    $mail->addAddress('selinayutong@gmail.com', 'Selina Yu');

    //Content
    $mail->isHTML(true);                                //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    if($mail->send()){
        redirectto("index.php#sectioncontact");
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>