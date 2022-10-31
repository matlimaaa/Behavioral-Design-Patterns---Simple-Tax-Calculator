<?php

namespace Src\DesignPattern;

use ArrayIterator;
use IteratorAggregate;
use Src\DesignPattern\BudgetStates\InProgress;
use Traversable;

class BudgetList implements IteratorAggregate
{
    /**
     * @var budgets[]
     */
    private array $budgets;

    public function __construct()
    {
        $this->budgets = [];
    }

    public function addBudget(Budget $budget): void
    {
        $this->budgets[] = $budget;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->budgets);
    }

    public function openBudgets()
    {
        return array_filter(
            $this->budgets,
            fn (Budget $budget) => $budget->currentState instanceof InProgress
        );
    }
}