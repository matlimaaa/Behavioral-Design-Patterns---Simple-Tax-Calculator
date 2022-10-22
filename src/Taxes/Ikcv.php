<?php

namespace Src\DesignPattern\Taxes;

use Src\DesignPattern\Budget;

class Ikcv implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        if ($budget->value > 300 && $budget->quantityOfItems > 3) {
            return $budget->value * 0.04;
        }

        return $budget->value * 0.025;

    }
}