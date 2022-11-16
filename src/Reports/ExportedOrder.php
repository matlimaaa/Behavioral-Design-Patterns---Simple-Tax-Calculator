<?php

namespace Src\DesignPattern\Reports;

use Src\DesignPattern\Order;

class ExportedOrder implements ExportedContent
{
    private Order $order;

    public function __construct(
        Order $order
    ) {
        $this->order = $order;
    }

    public function content(): array
    {
        return [
            'client_name' => $this->order->clientName,
            'completion_date' => $this->order->completionDate->format('d/m/Y')
        ];
    }
}