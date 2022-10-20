<?php

namespace Src\DesignPattern;

use Src\DesignPattern\Taxes\Tax;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->quantityOfItems > 5) {
            return $budget->value * 0.1;
        }

        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }

        if ($budget->value > 1000 && $budget->quantityOfItems > 8) {
            return $budget->value * 0.15;
        }

        return 0;
    }
}