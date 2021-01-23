<?php


namespace patterns\Adapter;


class Mail implements MailInterface
{
    public function sendMail(string $to, string $subject, string $text)
    {
        mail($to, $subject, $text);
    }
}