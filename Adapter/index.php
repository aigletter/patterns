<?php

use patterns\Adapter\Mail;
use patterns\Adapter\MailAdapter;
use patterns\Adapter\MailInterface;
use PHPMailer\PHPMailer\PHPMailer;

include '../../vendor/autoload.php';

// Client code
function send(MailInterface $mail)
{
    $to = '';
    $subject = '';
    $text = '';

    $mail->sendMail($to, $subject, $text);
}

//$mail = new Mail();
//$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail = new MailAdapter(new PHPMailer());
send($mail);