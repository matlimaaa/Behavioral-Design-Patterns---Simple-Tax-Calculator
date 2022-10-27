<?php

namespace Src\DesignPattern\BudgetStates;

use DomainException;
use Src\DesignPattern\Budget;

class Finished extends BudgetStates
{
    public function applyExtraDiscount(Budget $budget): float
    {
        throw new DomainException(
            'Completed budget cannot receive discounts'
        );
    }
}