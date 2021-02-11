<?php

include '../../vendor/autoload.php';;

//$printer = new \patterns\Bridge\ReportPdfPrinter();
$printer = new \patterns\Bridge\ReportCsvPrinter();

// Тот же самый
$report = new \patterns\Bridge\Report($printer);


$report->print();