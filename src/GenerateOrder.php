<?php

namespace Src\DesignPattern;

class GenerateOrder
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

    public function getBudgetAmount()
    {
        return $this->budgetAmount;
    }

    public function getQuantityOfItems()
    {
        return $this->quantityOfItems;
    }

    public function getClientName()
    {
        return $this->clientName;
    }

}