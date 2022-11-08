<?php

namespace Src\DesignPattern\Reports;

use SimpleXMLElement;
use Src\DesignPattern\Budget;

class XmlReport
{
    public function export(Budget $budget): string
    {
        $element = new SimpleXMLElement("<budget/>");
        $element->addChild('value', $budget->value);
        $element->addChild('quantity_of_items', $budget->quantityOfItems);

        return $element->asXML();
    }
}