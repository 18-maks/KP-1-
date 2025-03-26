<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $user;
    public $cart;
    public $total;
    public $orderId;
    public $orderDate;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, $cart, $total)
    {
        $this->user = $user;
        $this->cart = $cart;
        $this->total = $total;
        $this->orderId = 'ORD-' . uniqid();
        $this->orderDate = now()->format('d.m.Y H:i');
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Ваш заказ в The 1 moto успешно оформлен!')
                   ->view('emails.order');
    }
} 