<?php

namespace Src\DesignPattern;

use Src\DesignPattern\Discounts\DiscountOverFiveHundred;
use Src\DesignPattern\Discounts\FiveItemDiscount;
use Src\DesignPattern\Discounts\NoDiscount;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget): float
    {
        $discountChain = new FiveItemDiscount(
            new DiscountOverFiveHundred(
                new NoDiscount()
            )
        );

        return $discountChain->calculateDiscount($budget);
    }
}