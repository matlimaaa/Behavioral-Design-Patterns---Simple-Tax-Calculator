<?php

namespace Src\DesignPattern\BudgetStates;

use DomainException;
use Src\DesignPattern\Budget;

class Disapproved extends BudgetStates
{
    public function applyExtraDiscount(Budget $budget): float
    {
        throw new DomainException(
            'Failed budget cannot receive discounts'
        );
    }

    public function finish(Budget $budget)
    {
        $budget->currentState = new Finished();
    }
}