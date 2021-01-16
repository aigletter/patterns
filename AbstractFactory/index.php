<?php

use patterns\AbstractFactory\AbstractFactory;
use patterns\AbstractFactory\HtmlFactory;
use patterns\AbstractFactory\TextFactory;
use patterns\AbstractFactory\XmlFactory;

function renderPageComponents(AbstractFactory $abstractFactory)
{
    $header = $abstractFactory->createHeader();
    $body = $abstractFactory->createBody();
    $footer = $abstractFactory->createFooter();

    $header->drawHeader();
    $body->drawBody();
    $footer->drawFooter();
}



// ...

$htmlFactory = new HtmlFactory();
renderPageComponents($htmlFactory);

$textFactory = new TextFactory();
renderPageComponents($textFactory);

$xmlFactory = new XmlFactory();
renderPageComponents($xmlFactory);