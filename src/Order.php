<?php

namespace Src\DesignPattern;

use DateTimeImmutable;

class Order
{
    public string $clientName;
    public DateTimeImmutable $completionDate;
    public Budget $budget;
}