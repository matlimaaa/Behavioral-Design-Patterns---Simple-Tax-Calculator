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

        return 0;
    }
}