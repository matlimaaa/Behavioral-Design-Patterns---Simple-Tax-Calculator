<?php

namespace Src\DesignPattern\CreateOrderInDatabase;

use Src\DesignPattern\Order;

class SendOrderByEmail
{
    public function performAction(Order $order): void
    {
        echo "Send e-mail for client" . PHP_EOL;
    }
}