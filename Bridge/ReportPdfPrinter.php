<?php


namespace patterns\Bridge;


class ReportPdfPrinter implements PrintInterface
{

    public function print($report)
    {
        echo 'Printed pdf with content ' . $report . "\n";
    }
}