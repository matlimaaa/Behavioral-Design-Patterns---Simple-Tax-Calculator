<?php

namespace Src\DesignPattern\CreateOrderInDatabase;

use Src\DesignPattern\Order;

class CreateOrderInDatabase
{
    public function performAction(Order $order): void
    {
        echo "Create new order in the Database" . PHP_EOL;
    }
}