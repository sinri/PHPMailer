<?php

require 'PHPMailerAutoload.php';

$mail = new \sinri\smallphpmailer\library\PHPMailer();

$mail->isSMTP();

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
// Set mailer to use SMTP
$mail->Host = 'smtp.exmail.qq.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '*****@*****.com';                 // SMTP username
$mail->Password = '*****';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('bi-report@leqee.com', 'Mailer');
$mail->addAddress('ljni@leqee.com', 'Joe User');     // Add a recipient
//$mail->addAddress('lll@ddd.com');               // Name is optional
$mail->addReplyTo('sinri@everstray.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->addAttachment(__DIR__ . '/LICENSE');         // Add attachments
$mail->addAttachment(__DIR__ . '/README.md', 'about_small_phpmail');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}