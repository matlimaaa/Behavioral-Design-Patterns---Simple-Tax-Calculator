<?php

namespace Src\DesignPattern;

use DomainException;

class Budget
{
    public float $value;
    public int $quantityOfItems;
    public string $currentState;

    public function applyExtraDiscount()
    {
        $this->value -= $this->calculateExtraDiscount();
    }

    public function calculateExtraDiscount(): float
    {
        if ($this->currentState === 'IN_PROGRESS') {
            return $this->value * 0.05;
        }

        if ($this->currentState === 'APPROVED') {
            return $this->value * 0.02;
        }

        throw new DomainException(
            'Failed and completed budget cannot receive discounts'
        );
    }
}