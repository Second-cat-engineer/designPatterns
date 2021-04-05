<?php

use patterns\factorymethod\example2\ConcreteCreator1;
use patterns\factorymethod\example2\ConcreteCreator2;
use patterns\factorymethod\example2\Creator;

require_once  __DIR__ . '/../../../autoload.php';

function clientCode(Creator $creator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
    // ...
}

echo "App: Launched with the ConcreteCreator1.\n";
clientCode(new ConcreteCreator1());
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";
clientCode(new ConcreteCreator2());
