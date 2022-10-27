<?php

require_once 'vendor/autoload.php';

use Src\DesignPattern\{
    Budget,
    GenerateOrder,
    Order
};

$budgetAmount = $argv[1];
$quantityOfItems = $argv[2];
$clientName = $argv[3];

$generateOrder = new GenerateOrder(
    $budgetAmount,
    $quantityOfItems,
    $clientName
);

$generateOrder->execute();