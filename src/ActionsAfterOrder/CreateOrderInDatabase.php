<?php

namespace Src\DesignPattern\ActionsAfterOrder;

use Src\DesignPattern\Order;

class CreateOrderInDatabase implements ActionsAfterOrder
{
    public function performAction(Order $order): void
    {
        echo "Create new order in the Database" . PHP_EOL;
    }
}