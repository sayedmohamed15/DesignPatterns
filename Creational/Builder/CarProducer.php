<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;

class CarProducer
{
    /**
     * @var CarBuilderInterface
     */
    private $Builer;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->Builer = $builder;
    }
    public function ProduceCar(): Car{
        $this->Builer->createCar();
        $this->Builer->addBody();
        $this->Builer->addDoors();
        $this->Builer->addEngine();
        $this->Builer->addWheel();
        return $this->Builer->getCar();
    }
}