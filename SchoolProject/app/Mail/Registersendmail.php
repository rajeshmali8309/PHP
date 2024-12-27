<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Registration;

class Registersendmail extends Mailable
{
    use Queueable, SerializesModels;

    public $messages;
    public $subjects;
    public $Data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$toEmail)
    {
        
        $this->subjects = $subject;
        $this->Data = $toEmail;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->subjects,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $RegisterData = Registration::where('email', $this->Data)->first();
        return new Content(
           
            view: 'mailview.mail',
            with: [
                'RegisterData'=> $RegisterData,
                ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
