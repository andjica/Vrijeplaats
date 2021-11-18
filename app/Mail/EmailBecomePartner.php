<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailBecomePartner extends Mailable
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
        return $this->from(request()->email)
        ->subject('Hallo, je hebt een nieuw bericht ontvangen over de nieuwe samenwerking van: '.request()->contactperson)
        ->to('info@vrijeplaats.nl')
        ->view('emails.becomepartner')->with('data', $this->data);
    }
}
