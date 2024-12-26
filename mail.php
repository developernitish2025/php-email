<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include the Composer autoload file
require 'vendor/autoload.php';
// This assumes you used Composer to install PHPMailer

// Create a new PHPMailer instance
$mail = new PHPMailer( true );

try {
    //Server settings
    $mail->isSMTP();
    // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';
    // Set SMTP server to Gmail
    $mail->SMTPAuth = true;
    // Enable SMTP authentication
    $mail->Username = 'itsolutiondelhi2024@gmail.com';
    // SMTP username ( your Gmail address )
    $mail->Password = '';
    // SMTP password ( App Password for Gmail )
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    // TCP port to connect to, use 465 for `ssl` or 587 for `tls`

    //Recipients
    $mail->setFrom( 'itsolutiondelhi2024@gmail.com', 'Your Name' );
    // Sender's email and name
    $mail->addAddress('itsolutiondelhi2024@gmail.com', 'Recipient Name');  // Add a recipient
    // Add more recipients if needed
    //$mail->addAddress('other@example.com'); // Another recipient

    //Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'Test Email Subject';
    $mail->Body    = '<h1>Hello, this is a test email!</h1><p>This email was sent using PHPMailer with Gmail SMTP.</p>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';  // Plain-text version for non-HTML mail clients

    // Send the email
    $mail->send();
    echo 'Message has been sent successfully';
} catch ( Exception $e ) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
