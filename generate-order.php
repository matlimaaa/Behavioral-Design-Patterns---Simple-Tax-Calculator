<?php

require_once 'vendor/autoload.php';

use Src\DesignPattern\{
    Budget,
    GenerateOrder,
    GenerateOrderHandler,
    Order
};
use Src\DesignPattern\ActionsAfterOrder\CreateOrderInDatabase;
use Src\DesignPattern\ActionsAfterOrder\SendOrderByEmail;

$budgetAmount = $argv[1];
$quantityOfItems = $argv[2];
$clientName = $argv[3];

$generateOrder = new GenerateOrder(
    $budgetAmount,
    $quantityOfItems,
    $clientName
);

$generateOrderHandler = new GenerateOrderHandler();
$generateOrderHandler->addActionAfterGeneratingOrder(new CreateOrderInDatabase());
$generateOrderHandler->addActionAfterGeneratingOrder(new SendOrderByEmail());
$generateOrderHandler->execute($generateOrder);