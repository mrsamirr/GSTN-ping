<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendUserCountMail extends Mailable
{
    use Queueable, SerializesModels;

   
    public function __construct($count)
    {
        $this->count = $count;  
    }

    
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send User Count Mail',
        );
    }

    
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.usermail',
            with: [
                'count' => $this->count,
            ],
        );
    }

    
    public function attachments(): array
    {
        return [];
    }
}
