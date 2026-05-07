<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Modules\Order\Models\Order;

class OrderStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Order $order, public string $previousStatus) {}

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Order Update: '.$this->order->order_number.' is '.$this->order->status);
    }

    public function content(): Content
    {
        return new Content(view: 'emails.order-status');
    }
}
