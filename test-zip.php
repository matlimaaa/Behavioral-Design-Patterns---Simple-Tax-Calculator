<?php

use Src\DesignPattern\Budget;
use Src\DesignPattern\Reports\ZipReport;

require_once 'vendor/autoload.php';

$zipBudget = new ZipReport();

$budget = new Budget();
$budget->value = 11000;

$zipBudget->export($budget);