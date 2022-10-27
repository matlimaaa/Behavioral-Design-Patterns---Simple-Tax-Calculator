<?php

namespace Src\DesignPattern\BudgetStates;

use DomainException;
use Src\DesignPattern\Budget;

abstract class BudgetStates
{    
    /**
     * applyExtraDiscount
     *
     * @param  Budget $budget
     * @return float
     * @throws DomainException
     */
    abstract public function applyExtraDiscount(Budget $budget): float;

    public function toApprove(Budget $budget)
    {
        throw new DomainException(
            'this budget cannot be approved.'
        );
    }

    public function fail(Budget $budget)
    {
        throw new DomainException(
            'this budget cannot be disapproved.'
        );
    }

    public function finish(Budget $budget)
    {
        throw new DomainException(
            'this budget cannot be finalized.'
        );
    }
}