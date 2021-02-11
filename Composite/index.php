<?php

include '../../vendor/autoload.php';

$divElementRoot = new \patterns\Composite\DivElement('div');
$divElementChild = new \patterns\Composite\DivElement('div');
$spanElement1 = new \patterns\Composite\SpanElement('span', 'I am span');
$spanElement2 = new \patterns\Composite\SpanElement('span', 'I am another span');

$divElementChild->addChild('span1', $spanElement1);
$divElementChild->addChild('span2', $spanElement2);

$divElementRoot->addChild('child', $divElementChild);

//

echo $divElementRoot->render();

/*foreach ($divElement->getChildren() as $element) {
    echo $element->render();
}*/