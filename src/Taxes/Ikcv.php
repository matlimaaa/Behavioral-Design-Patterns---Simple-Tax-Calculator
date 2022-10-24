<?php

namespace Src\DesignPattern\Taxes;

use Src\DesignPattern\Budget;

class Ikcv extends TaxWithTwoRates
{
    protected function mustApplyMaximumTax(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->quantityOfItems > 3;
    }

    protected function applyMaximumTax(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function applyMinimumTax(Budget $budget): float
    {
        return $budget->value * 0.025;
    }
}
