<?php

namespace Adastra\Design\Factory;

class ConcreteFactoryB implements Factory
{
    public function createProduct()
    {
        return new ConcreteProductB();
    }
}
