<?php


namespace patterns\Bridge;


class ReportCsvPrinter implements PrintInterface
{
    public function print($report)
    {
        echo 'Printed csv with content ' . $report . "\n";
    }
}