<?php

namespace Src\DesignPattern\Taxes;

use Src\DesignPattern\Budget;

class Icpp extends TaxWithTwoRates
{
    protected function mustApplyMaximumTax(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function applyMaximumTax(Budget $budget): float
    {
        return $budget->value * 0.03;
    }

    protected function applyMinimumTax(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}