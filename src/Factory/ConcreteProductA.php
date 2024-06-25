<?php

namespace Adastra\Design\Factory;

class ConcreteProductA implements ProductInterface
{
    public function getType()
    {
        return "Product A";
    }
}
