<?php

namespace app\decorator;

class TireRotation implements CarService
{

    protected CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost(): CarService|int
    {
        return 15 + $this->carService->getCost();
    }

    public function getDescription(): string
    {
        return $this->carService->getDescription() . ', and a tire rotation';
    }
}
