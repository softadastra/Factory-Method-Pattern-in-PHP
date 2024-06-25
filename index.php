<?php

use Adastra\Design\Factory\ConcreteFactoryA;
use Adastra\Design\Factory\ConcreteFactoryB;
use Adastra\Design\Factory\Factory;

require_once 'vendor/autoload.php';

function clientCode(Factory $factory)
{
    $product = $factory->createProduct();
    echo "Created " . $product->getType() . "\n";
}

$factoryA = new ConcreteFactoryA();
clientCode($factoryA);
echo "<br>";

$factoryB = new ConcreteFactoryB();
clientCode($factoryB);
