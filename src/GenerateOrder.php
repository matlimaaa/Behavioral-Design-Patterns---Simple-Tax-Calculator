<?php

namespace Src\DesignPattern;

use DateTimeImmutable;

class GenerateOrder implements Command
{
    private float $budgetAmount;
    private int $quantityOfItems;
    private string $clientName;

    public function __construct(
        float $budgetAmount,
        int $quantityOfItems,
        string $clientName
    ) {
        $this->budgetAmount = $budgetAmount;
        $this->quantityOfItems = $quantityOfItems;
        $this->clientName = $clientName;
    }

    public function execute()
    {
        $budget = new Budget();
        $budget->quantityOfItems = $this->quantityOfItems;
        $budget->value = $this->budgetAmount;

        $order = new Order();
        $order->completionDate = new DateTimeImmutable();
        $order->clientName = $this->clientName;
        $order->budget = $budget;

        
        echo "Create new order in the Database" . PHP_EOL;
        echo "Send e-mail for client" . PHP_EOL;
    }
}