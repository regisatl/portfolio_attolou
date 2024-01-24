<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

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
    public function build()
    {
        return $this->subject('Mail from Portfolio ATTOLOU')->replyTo($this->email)->view('emails.contact');
    }


}
