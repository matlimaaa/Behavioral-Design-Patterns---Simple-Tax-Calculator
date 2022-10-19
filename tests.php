<?php

use Src\DesignPattern\Budget;
use Src\DesignPattern\TaxCalculator;
use Src\DesignPattern\Taxes\Icms;
use Src\DesignPattern\Taxes\Iss;

require 'vendor/autoload.php';

/**
 * fake test file used to streamline with a simple manual test
 */

$calculator = new TaxCalculator();

$budget = new Budget();

$budget->value = 100;

echo $calculator->calculateTax($budget, new Iss());