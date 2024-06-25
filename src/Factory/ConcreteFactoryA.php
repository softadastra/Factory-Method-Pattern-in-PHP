<?php

namespace Adastra\Design\Factory;

class ConcreteFactoryA implements Factory
{
    public function createProduct()
    {
        return new ConcreteProductA();
    }
}
