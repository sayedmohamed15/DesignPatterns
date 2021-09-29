<?php

namespace Tests;

use Creational\Builder\BENZCarBuilder;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BENZCar;
use Creational\Builder\Models\BMWCar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    public function testCanProduceBMWCar(){
        $BMWBuilder = new BMWCarBuilder();
        $carProducer = new CarProducer($BMWBuilder);
        $myCar = $carProducer->ProduceCar();
        $this->assertInstanceOf(BMWCar::class,$myCar);
    }
    public function testCanProduceBENZCar(){
        $BENZBuilder = new BENZCarBuilder();
        $carProducer = new CarProducer($BENZBuilder);
        $myCar = $carProducer->ProduceCar();
        $this->assertInstanceOf(BENZCar::class,$myCar);
    }

}