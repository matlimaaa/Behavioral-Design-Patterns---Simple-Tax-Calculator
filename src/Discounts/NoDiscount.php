<?php

namespace Src\DesignPattern\Discounts;

use Src\DesignPattern\Budget;

class NoDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}