<?php

namespace Src\DesignPattern;

use DateTimeImmutable;
use Src\DesignPattern\CreateOrderInDatabase\CreateOrderInDatabase;
use Src\DesignPattern\CreateOrderInDatabase\SendOrderByEmail;

class GenerateOrderHandler
{
    public function __construct(/** OrderRepository, MailService */) {
    }

    public function execute(GenerateOrder $generateOrder)
    {
        $budget = new Budget();
        $budget->quantityOfItems = $generateOrder->getQuantityOfItems();
        $budget->value = $generateOrder->getBudgetAmount();

        $order = new Order();
        $order->completionDate = new DateTimeImmutable();
        $order->clientName = $generateOrder->getClientName();
        $order->budget = $budget;

        $orderRepository = new CreateOrderInDatabase();
        $sendEmail = new SendOrderByEmail();

        $orderRepository->performAction($order);
        $sendEmail->performAction($order);
    }
}