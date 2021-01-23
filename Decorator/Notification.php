<?php


namespace patterns\Decorator;


use PHPMailer\PHPMailer\PHPMailer;

class Notification implements NotificationInterface
{
    public function notify(string $to, $error)
    {
        $mailer = new PHPMailer();
        $mailer->addAddress($to);
        $mailer->Body = $error;
        //$mailer->send();

        echo "sent mail\n";
    }
}