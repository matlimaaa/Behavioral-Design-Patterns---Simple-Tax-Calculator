<?php

use Src\DesignPattern\Budget;
use Src\DesignPattern\DiscountCalculator;
use Src\DesignPattern\TaxCalculator;
use Src\DesignPattern\Taxes\Icms;
use Src\DesignPattern\Taxes\Iss;

require 'vendor/autoload.php';

/**
 * fake test file used to streamline with a simple manual test
 */

 /*
$calculator = new TaxCalculator();

$budget = new Budget();

$budget->value = 100;

echo $calculator->calculateTax($budget, new Iss());

*/

$discountCalculator = new DiscountCalculator();

$budget = new Budget();

$budget->value = 200;

$budget->quantityOfItems = 5;

echo $discountCalculator->calculateDiscount($budget);

