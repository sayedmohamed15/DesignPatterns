<?php

namespace Tests;

use Creational\FactoryMethod\BENZBrand;
use Creational\FactoryMethod\BENZBrandfactory;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanBuildBMWBrand(){
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->buildBrand();

        $this->assertInstanceOf(BMWBrand::class,$myBrand);
    }

    public function testCanBuildBENZBrand(){
        $brandFactory = new BENZBrandfactory();
        $myBrand = $brandFactory->buildBrand();

        $this->assertInstanceOf(BENZBrand::class,$myBrand);
    }
}