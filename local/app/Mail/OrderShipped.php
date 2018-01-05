<?php

namespace App\Mail;

use App\Basket;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    protected $basket;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.email-shipped')->with([
            'order' => $this->basket
        ]);
    }
}
