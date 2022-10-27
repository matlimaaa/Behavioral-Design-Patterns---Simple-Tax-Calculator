<?php

namespace Src\DesignPattern\BudgetStates;

use Src\DesignPattern\Budget;

class Approved extends BudgetStates
{
    public function applyExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}