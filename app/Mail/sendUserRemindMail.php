<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendUserRemindMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public function __construct()
    {
        
    }

    
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send User Remind Mail',
        );
    }

   
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
            with: [
                'variable1' => 'value1',
                'variable2' => 'value2',
            ],
        );
    }

    
    public function attachments(): array
    {
        return [];
    }
}
