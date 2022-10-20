<?php

namespace Src\DesignPattern\Discounts;

use Src\DesignPattern\Budget;

class FiveItemDiscount extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->quantityOfItems > 5) {
            return $budget->value * 0.09;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}