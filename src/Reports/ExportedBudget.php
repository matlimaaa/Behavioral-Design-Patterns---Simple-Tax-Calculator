<?php

namespace Src\DesignPattern\Reports;

use Src\DesignPattern\Budget;

class ExportedBudget implements ExportedContent
{
    private Budget $budget;

    public function __construct(
        Budget $budget
    ) {
        $this->budget = $budget;
    }

    public function content(): array
    {
        return [
            'value' => $this->budget->value,
            'quantity_of_items' => $this->budget->quantityOfItems
        ];
    }
}