<?php

namespace Creational\FactoryMethod;

class BENZBrandfactory implements  BrandFactory
{
    public function buildBrand()
    {
        // TODO: Implement buildBrand() method.
        return new BENZBrand();
    }

}