<?php

namespace Src\DesignPattern\Reports;

interface ExportedFile
{
    public function save(ExportedContent $exportedContent): string;
}