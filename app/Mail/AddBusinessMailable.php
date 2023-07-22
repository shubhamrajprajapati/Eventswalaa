<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AddBusinessMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $business_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($business_data)
    {
        $this->business_data = $business_data;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Add Business Mailable',
        );
    }

  
    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    // public function content()
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    public function build()
    {
        // return $this->view('view.name');

        $from_name = "Event Walla";
        $from_email = "info.eventswalaa@gmail.com";
        $subject = "Event Walla: You have a new query from Add Business";
        return $this->from($from_email, $from_name)
            ->view('emails.business')
            ->subject($subject)
        ;
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
