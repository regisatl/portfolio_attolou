<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public string $name, public string $email, public string $body)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     *
     * */
    // public function build()
    // {
    //     return $this->subject('Mail from Portfolio ATTOLOU')->replyTo($this->email)->view('emails.contact');
    // }
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('regisattolou19@gmail.com', 'TECHNOLOGIE ATL'),
            replyTo: [
                new Address('regisattolou19@gmail.com', 'Régis ATTOLOU'),
            ],
            subject: 'Mail from Portfolio ATTOLOU',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }

}
