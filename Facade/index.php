<?php

$reporter = new \patterns\Facade\Reporter(
    new \patterns\Facade\DatabaseAnalizer(),
    new \patterns\Facade\DataLoader(),
    new \patterns\Facade\EmailSender(),
    new \patterns\Facade\PdfFormater()

);




// client code
$reporter->report();