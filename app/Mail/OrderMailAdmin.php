<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public $product;

    public $file = null;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $product, $file = null)
    {
        //
        $this->data = $data;

        $this->product = $product;

        if ($file) {

            $this->file = $file;
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // dd($this->product->personalized);
        if ($this->file) {
            return $this->from('admin@moustakbaly.ma')
                ->subject('Kamobilia Order')
                ->view($this->product->personalized ? 'mails.orderConfirmedAdminPerso':'mails.orderConfirmedAdmin')
                ->with('order', $this->data)
                ->with('product', $this->product)
                ->attachFromStorage($this->file);
        }
        return $this->from('admin@moustakbaly.ma')
            ->subject('Kamobilia Order')
            ->view($this->product->personalized ? 'mails.orderConfirmedAdminPerso':'mails.orderConfirmedAdmin')
            ->with('order', $this->data)
            ->with('product', $this->product);
    }
}
