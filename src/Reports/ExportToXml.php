<?php

namespace Src\DesignPattern\Reports;

use SimpleXMLElement;

class ExportToXml implements ExportedFile
{
    private string $tagName;

    public function __construct(
        string $tagName
    ) {
        $this->tagName = $tagName;
    }

    public function save(ExportedContent $exportedContent): string
    {
        $xmlElement = new SimpleXMLElement("<{$this->tagName} />");

        foreach ($exportedContent->content() as $key => $value) {
            $xmlElement->addChild($key, $value);
        }

        $filePath =  tempnam(sys_get_temp_dir(), 'xml');

        $xmlElement->asXML($filePath);

        return $filePath;
    }
}