<?php

namespace Src\DesignPattern\ActionsAfterOrder;

use Src\DesignPattern\Order;

class SendOrderByEmail implements ActionsAfterOrder
{
    public function performAction(Order $order): void
    {
        echo "Send e-mail for client" . PHP_EOL;
    }
}