<?php

namespace Traits;

require_once(__DIR__.'/../Vendors/phpMailer/vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

trait Mail{

    private $sendTo;
    private $sendName;
    private $sendMail;
    private $subject;
    private $body;

    public function setEmail($sendTo,$sendName,$sendMail,$subject,$body){
        $this->sendTo = $sendTo;
        $this->sendName = $sendName;
        $this->sendMail = $sendMail;
        $this->subject = $subject;
        $this->body = $body;
        return $this;
    }

    public function sendEmail(){
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
            $mail->Host = "smtp.mail.yahoo.com";
            $mail->SMTPAuth = true;
            $mail->Username = "m_fathi65@yahoo.com";
            $mail->Password = "0pd4s2f14";
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";

            $mail->setFrom($this->sendMail, $this->sendName);
            $mail->addAddress($this->sendTo);
            $mail->isHTML(true);
            $mail->Subject = $this->subject;
            $mail->Body = $this->body;

            $mail->send();
            echo "Sended !";
        } catch (Exception $e) {
            echo "Error For Sending Mail ! Error :  " . $e->getMessage();
        }
    }

    public function __destruct(){
        $this->sendTo = NULL;
        $this->sendName = NULL;
        $this->sendMail = NULL;
        $this->subject = NULL;
        $this->body = NULL;
    }

}

