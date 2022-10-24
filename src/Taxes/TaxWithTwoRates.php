<?php

namespace Src\DesignPattern\Taxes;

use Src\DesignPattern\Budget;

abstract class TaxWithTwoRates implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        if ($this->mustApplyMaximumTax($budget)) {
            return $this->applyMaximumTax($budget);
        }

        return $this->applyMinimumTax($budget);
    }

    abstract protected function mustApplyMaximumTax(Budget $budget): bool;
    abstract protected function applyMaximumTax(Budget $budget): float;
    abstract protected function applyMinimumTax(Budget $budget): float;
}