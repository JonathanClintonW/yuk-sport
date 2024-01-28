<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCancelled extends Mailable
{
    use Queueable, SerializesModels;

    public $cancelDetails;

    /**
     * Create a new message instance.
     *
     * @param array $orderDetails
     */
    public function __construct($cancelDetails)
    {
        $this->cancelDetails = $cancelDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.cancelOrder.created')
            ->subject('Order Cancelled Notification');
    }
}
