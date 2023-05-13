<?php
// Include the PHPMailer library
require 'PHPMailer/PHPMailerAutoload.php';

// Create a new PHPMailer object
$mail = new PHPMailer;

// Set the SMTP server details
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';   // SMTP server address
$mail->SMTPAuth = true;           // Enable SMTP authentication
$mail->Username = 'your_email@gmail.com'; // SMTP account username
$mail->Password = 'your_password';  // SMTP account password
$mail->SMTPSecure = 'tls';         // Enable TLS encryption
$mail->Port = 587;                // SMTP server port number

// Set the email details
$mail->setFrom('your_email@gmail.com', 'Your Name');
$mail->addAddress('recipient_email@example.com', 'Recipient Name');
$mail->Subject = 'Test Email';
$mail->Body = 'This is a test email.';

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully.';
} else {
    echo 'Error sending email: ' . $mail->ErrorInfo;
}
?>
