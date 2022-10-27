<?php

namespace Src\DesignPattern;

use DomainException;
use Src\DesignPattern\BudgetStates\BudgetStates;
use Src\DesignPattern\BudgetStates\InProgress;

class Budget
{
    public float $value;
    public int $quantityOfItems;
    public BudgetStates $currentState;

    public function __construct()
    {
        $this->currentState = new InProgress();
    }

    public function applyExtraDiscount()
    {
        $this->value -= $this->currentState->applyExtraDiscount($this);
    }

    public function toApprove()
    {
        $this->currentState->toApprove($this);
    }

    public function fail(Budget $budget)
    {
        $this->currentState->fail($this);
    }

    public function finish(Budget $budget)
    {
        $this->currentState->finish($this);
    }
}