<?php

namespace Src\DesignPattern\Discounts;

use Src\DesignPattern\Budget;

abstract class Discount
{
    protected ?Discount $nextDiscount;

    public function __construct(?Discount $nextDiscount)
    {
        $this->nextDiscount = $nextDiscount;
    }

    abstract public function calculateDiscount(Budget $budget): float;
}