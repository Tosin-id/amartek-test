<?php

namespace App;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class Email
{
    public $sender;
    public $recipient;
    public $subject;
    public $body;

    public function __construct($sender, $recipient, $subject, $body)
    {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function send_email()
    {

        $mailData = [
            'sender' => $this->sender,
            'title' => $this->subject,
            'body' => $this->body
        ];

        Mail::to($this->recipient)->send(new TestMail($mailData));

        return "Email is sent successfully.";
    }
}
