<?php


namespace patterns\Adapter;


interface MailInterface
{
    public function sendMail(string $to, string $subject, string $text);
}