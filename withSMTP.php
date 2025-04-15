<?php
// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendMailSMPT($toemail,$toname='',$subject,$body){
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtpout.secureserver.net';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@parasinfotech.co.in';
        $mail->Password   = 'Paras@123';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 465; // Change this according to your SMTP server settings
    
        // Sender info
        $mail->setFrom('app@anoopam.org', 'Anoopam Mission');
    
        // Recipient
        $mail->addAddress($toemail, $toname);
    
        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = base64_decode($body,true);
        
        $subject = "";
            $message =  base64_decode($body,true);
    
        // Send the email
        $mail->Host;
        $mail->send();
       // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
