<?php
require 'PHPMailer/PHPMailerAutoload.php';


include 'session.php';

            $subject =$_POST['subject'];
            $email =$_POST['email'];
            $message =$_POST['message'];

$mail = new PHPMailer;



$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'krnekikrneki75@gmail.com';          // SMTP username
$mail->Password = 'krneki123'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('krnekikrneki75@gmail.com', 'krneki');
$mail->addReplyTo('krnekikrneki75@gmail.com', 'krneki');
$mail->addAddress("$email");   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = "$message";

$mail->Subject = "$subject";
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
