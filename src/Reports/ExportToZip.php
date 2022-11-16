<?php

namespace Src\DesignPattern\Reports;

use SimpleXMLElement;
use ZipArchive;

class ExportToZip implements ExportedFile
{
    private string $fileName;

    public function __construct(
        string $fileName
    ) {
        $this->fileName = $fileName;
    }

    public function save(ExportedContent $exportedContent): string
    {
        $zip = new ZipArchive();

        $filePath =  tempnam(sys_get_temp_dir(), 'zip');

        $zip->open($filePath);

        $zip->addFromString(
            $this->fileName,
            serialize($exportedContent->content())
        );

        $zip->close();
        
        return $filePath;
    }
}