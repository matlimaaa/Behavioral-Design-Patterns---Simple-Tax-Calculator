<?php

use Src\DesignPattern\Budget;
use Src\DesignPattern\Reports\ExportedBudget;
use Src\DesignPattern\Reports\ExportToXml;
use Src\DesignPattern\Reports\ExportToZip;

require_once 'vendor/autoload.php';

$budget = new Budget();
$budget->value = 500;
$budget->quantityOfItems = 10;

$exportedOrder = new ExportedBudget($budget);

// $exportToXml = new ExportToXml('exported-budget');

$exportToZip = new ExportToZip('exported-budget-zip');

// echo $exportToXml->save($exportedOrder);

echo $exportToZip->save($exportedOrder);