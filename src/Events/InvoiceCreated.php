<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class InvoiceCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $billable;
    public $subscription;
    public $payload;

    public function __construct($billable, $subscription, $payload)
    {
        $this->billable = $billable;
        $this->subscription = $subscription;
        $this->payload = $payload;
    }
}
