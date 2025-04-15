<?php
// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hiradechangdev@gmail.com';
    $mail->Password   = 'rgtbhwyxcxkxelle';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Sender info
    $mail->setFrom('hiradechangdev@gmail.com', 'Changdev Hirade');

    // Recipient
    $mail->addAddress('omkarharal178@gmail.com', 'MR OMKAR HARAL');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Email From Server to check With SMTP-PHPMAILER';
    $mail->Body    = 'This email send by Changdev Hirade for testing purpose only Do Not replay please';
    
    $subject = "";
        $message = "This email send by Changdev Hirade for testing purpose only Do Not replay please";

    // Send the email
    echo  $mail->Host;
    $mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
