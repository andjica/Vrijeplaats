<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmationCompany extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       //for company - to send password
       return $this->from('info@vrijeplaats.nl')
       ->subject('Vrijeplaats partner aanvraag, 
       Bevestiging voor partnerschapsaanvraag')
       ->to(request()->email)
       ->view('emails.tonewpartner')->with('data', $this->data);
    }
}
