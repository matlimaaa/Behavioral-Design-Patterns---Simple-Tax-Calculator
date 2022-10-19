<?php

namespace Src\DesignPattern\Taxes;

use Src\DesignPattern\Budget;

interface Tax
{
    public function calculateTax(Budget $budget): float;
}