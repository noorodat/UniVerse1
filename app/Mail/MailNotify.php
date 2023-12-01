<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    private $data = [];
    private $mailTemplate;
    public function __construct($data, $mailTemplate)
    {
        $this->data = $data;
        $this->mailTemplate = $mailTemplate;
    }

    public function build()
    {
        return $this->from('universe.edu.jo@gmail.com', 'UniVerse')
        ->subject($this->data['subject'])
        ->view('mails.' . $this->mailTemplate)->with('data', $this->data);
    }
}
