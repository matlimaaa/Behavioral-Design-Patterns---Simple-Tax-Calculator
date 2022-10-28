<?php

namespace Src\DesignPattern\ActionsAfterOrder;

use Src\DesignPattern\Order;

interface ActionsAfterOrder
{
    public function performAction(Order $order): void;
}