<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        )
    );
    $mail->isSMTP(true);
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "sampassassin@gmail.com";
    $mail->Password = "mohammad1384fathi";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";

    $mail->setFrom("sampassassin@gmail.com", "Mohammad");
    $mail->addAddress("sampassassin@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = "PHPMailer";
    $mail->Body = "Test PhpMailer";

    $mail->send();
    echo "Sended !";
} catch (PDOException $e) {
    echo "Error For Sending ! Error :  " . $e->getMessage();
}
