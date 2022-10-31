<?php

use Src\DesignPattern\Budget;
use Src\DesignPattern\BudgetList;

require_once 'vendor/autoload.php';

$listBudgets = [];

$budget1 = new Budget();
$budget1->quantityOfItems = 10;
$budget1->toApprove();
$budget1->value = mt_rand(100, 1500);

$budget2 = new Budget();
$budget2->quantityOfItems = 5;
$budget2->toApprove();
$budget2->value = mt_rand(100, 1500);

$budget3 = new Budget();
$budget3->quantityOfItems = 3;
$budget3->toApprove();
$budget3->value = mt_rand(100, 1500);

$budget4 = new Budget();
$budget4->quantityOfItems = 1;
$budget4->value = 500;

$budgetList = new BudgetList();
$budgetList->addBudget($budget1);
$budgetList->addBudget($budget2);
$budgetList->addBudget($budget3);
$budgetList->addBudget($budget4);

// foreach ($budgetList as $budget) {
//     echo "Value: " . $budget->value . PHP_EOL;
//     echo "State: " . get_class($budget->currentState) . PHP_EOL;
//     echo "Quantity of items: " . $budget->quantityOfItems . PHP_EOL;
//     echo PHP_EOL;
// }

foreach ($budgetList->openBudgets() as $budget) {
    echo "Value: " . $budget->value . PHP_EOL;
    echo "State: " . get_class($budget->currentState) . PHP_EOL;
    echo "Quantity of items: " . $budget->quantityOfItems . PHP_EOL;
    echo PHP_EOL;
}