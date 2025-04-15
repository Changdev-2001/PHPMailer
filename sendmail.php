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
    $mail->addAddress('changdevhirade0301@gmail.com', 'MR CHANGDEV');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Email From Server to check With SMTP-PHPMAILER';
    $mail->Body    = 'This email send by Changdev Hirade for testing purpose only Do Not replay please';
    
    $subject = "";
        $message = "This email send by Changdev Hirade for testing purpose only Do Not replay please";

    // Send the email
    // echo  $mail->Host;
    echo '<br>';
//     $mail->SMTPDebug = 2;
// $mail->Debugoutput = 'html';
    $mail->send();
    echo '<h2 style="text-align: center; color: green;">Email Sent Successfully!</h2>';
    echo '<h3 style="text-align: center; color: blue;">Subject: ' . $subject . '</h3>';
    echo '<h3 style="text-align: center; color: blue;">Message: ' . $message . '</h3>';
    echo '<h3 style="text-align: center; color: blue;">From: ' . $mail->From . '</h3>';
    echo '<h3 style="text-align: center; color: blue;">Date: ' . date('Y-m-d H:i:s') . '</h3>';
    echo '<h3 style="text-align: center; color: blue;">Status: Sent</h3>';
    echo '<h3 style="text-align: center; color: blue;">SMTP Server: ' . $mail->Host . '</h3>';
    echo '<h3 style="text-align: center; color: blue;">SMTP Port: ' . $mail->Port . '</h3>';
    echo '<h3 style="text-align: center; color: blue;">SMTP Secure: ' . $mail->SMTPSecure . '</h3>';
    echo '<footer style="text-align: center; margin-top: 40px; color: #777;"> <p>&copy; 2025 Changdev Hirade | PHPMailer Demo</p> </footer>';
    // Add a button to go back to home page
    echo '<a href="index.html" style="
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-family: Arial, sans-serif;
    z-index: 999;
">Back to Home</a>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
