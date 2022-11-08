<?php

namespace Src\DesignPattern\Reports;

use Src\DesignPattern\Budget;
use ZipArchive;

class ZipReport
{
    public function export(Budget $budget)
    {
        $filePath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'budget.zip';
        $zip = new ZipArchive();
        $zip->open($filePath, ZipArchive::CREATE);
        $zip->addFromString('budget.serialized', serialize($budget));
        $zip->close();
    }
}