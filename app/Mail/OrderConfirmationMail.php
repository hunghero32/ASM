<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cartItems;
    public $customerName;
    public $totalAmount;

    public function __construct($cartItems, $customerName, $totalAmount)
    {
        $this->cartItems = $cartItems;
        $this->customerName = $customerName;
        $this->totalAmount = $totalAmount;
    }

    public function build()
    {
        return $this->view('emails.order_confirmation')
                    ->with([
                        'cartItems' => $this->cartItems,
                        'customerName' => $this->customerName,
                        'totalAmount' => $this->totalAmount,
                    ]);
    }
}
