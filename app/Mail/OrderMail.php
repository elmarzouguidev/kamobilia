<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public $product;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $product)
    {
        //
        $this->data = $data;
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('admin@moustakbaly.ma')
            ->subject('Kamobilia Order')
            ->view('mails.orderConfirmed')
            ->with('order', $this->data)
            ->with('product', $this->product);
    }
}
