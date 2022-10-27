<?php

namespace Src\DesignPattern\BudgetStates;

use Src\DesignPattern\Budget;

class InProgress extends BudgetStates
{
    public function applyExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.05;
    }

    public function toApprove(Budget $budget)
    {
        $budget->currentState = new Approved();
    }

    public function fail(Budget $budget)
    {
        $budget->currentState = new Disapproved();
    }
}