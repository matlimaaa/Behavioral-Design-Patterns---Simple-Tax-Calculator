<?php

namespace Src\DesignPattern;

use DateTimeImmutable;

class GenerateOrderHandler
{
    public function __construct(/** OrderRepository, MailService */) {
    }

    public function execute(GenerateOrder $generateOrder)
    {
        $budget = new Budget();
        $budget->quantityOfItems = $generateOrder->getQuantityOfItems();
        $budget->value = $generateOrder->getBudgetAmount();

        $order = new Order();
        $order->completionDate = new DateTimeImmutable();
        $order->clientName = $generateOrder->getClientName();
        $order->budget = $budget;

        
        echo "Create new order in the Database" . PHP_EOL;
        echo "Send e-mail for client" . PHP_EOL;
    }
}