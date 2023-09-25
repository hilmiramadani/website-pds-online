<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailable\Content;
use Illuminate\Mail\Mailable\Envelope;
use Illuminate\Mail\Mailable\Address; 
use Illuminate\Queue\SerializesModels;


class MailPds extends Mailable
{

    public $mailData;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Test Email PDS',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.test-email',
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.test-email');
    }
}
