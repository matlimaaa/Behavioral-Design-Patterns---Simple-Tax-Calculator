<?php

namespace Src\DesignPattern;

use Src\DesignPattern\Taxes\Tax;

class TaxCalculator
{
    public function calculateTax(Budget $budget, Tax $tax): float
    {
        return $tax->calculateTax($budget);
    }
}