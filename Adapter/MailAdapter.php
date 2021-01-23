<?php


namespace patterns\Adapter;


use PHPMailer\PHPMailer\PHPMailer;

class MailAdapter implements MailInterface
{
    /**
     * @var PHPMailer
     */
    protected $mailer;

    public function __construct(PHPMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMail(string $to, string $subject, string $text)
    {
        // Все что угодно
        $this->mailer->addAddress($to);
        $this->mailer->Subject = $subject;
        $this->mailer->Body = $text;
        $this->mailer->send();
    }
}