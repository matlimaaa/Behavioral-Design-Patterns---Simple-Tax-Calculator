<?php

namespace Src\DesignPattern;

use DomainException;
use Src\DesignPattern\BudgetStates\Finished;
use Src\DesignPattern\Http\HttpAdapter;

class BudgetRecord
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function create(Budget $budget)
    {
        if ($budget->currentState instanceof Finished) {
            throw new DomainException(
                'Only finalized budgets can be registered'
            );
        }

        $this->http->post(
            'http://api.regiter.budget',
            [
                'value' => $budget->value,
                'quantityOfItems' => $budget->quantityOfItems,
            ]
        );
    }
}