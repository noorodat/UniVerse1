<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseBought extends Mailable
{
    use Queueable, SerializesModels;

    private $title = 'Payment successful';
    private $content;
    private $name;
    private $courseName;
    private $price;

    public function __construct($name, $courseName, $price)
    {
        $this->name = $name;
        $this->courseName = $courseName;
        $this->price = $price;
        $this->content = 'Hello ' . $name . ', your purchase for the course ' . $courseName . ' is done and the price is ' . $price;
    }

    public function build()
    {
        return $this->subject($this->title)
            ->view('mails.courseBought', ['content' => $this->content]);
    }

    // Implement attachments logic if needed
    public function attachments(): array
    {
        // Define logic to attach files if necessary
        return [];
    }
}
