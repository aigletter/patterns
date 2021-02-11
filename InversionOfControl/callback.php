<?php

include '../../vendor/autoload.php';


$service = new \patterns\InversionOfControl\Service();

$items = $service->getDirectItems();
$iterator1 = new ArrayIterator($items);

// ...

$callback = function($items){
    return new ArrayIterator($items);
};
$iterator2 = $service->getCallbackItems($callback);





foreach ($iterator1 as $item) {
    echo $item . "\n";
}
foreach ($iterator2 as $item) {
    echo $item . "\n";
}

exit();