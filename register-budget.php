<?php

use Src\DesignPattern\Budget;
use Src\DesignPattern\BudgetRecord;
use Src\DesignPattern\Http\CurlHttpAdapter;

require_once 'vendor/autoload.php';

$registerBudget = new BudgetRecord(new CurlHttpAdapter());

$registerBudget->create(new Budget());