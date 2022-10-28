<?php

namespace Src\DesignPattern;

use DateTimeImmutable;
use Src\DesignPattern\ActionsAfterOrder\ActionsAfterOrder;

class GenerateOrderHandler
{
    /**
     * @var ActionsAfterOrder[]
     */
    private array $ActionsAfterOrder = [];

    public function __construct(/** OrderRepository, MailService */) {
    }

    public function addActionAfterGeneratingOrder(ActionsAfterOrder $action)
    {
        $this->ActionsAfterOrder[] = $action;
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

        foreach ($this->ActionsAfterOrder as $action) {
            $action->performAction($order);
        }
    }
}