<?php

namespace Creational\FactoryMethod;

class BMWBrandFactory implements BrandFactory
{
    public function buildBrand()
    {
        // TODO: Implement buildBrand() method.
        return new BMWBrand();
    }

}