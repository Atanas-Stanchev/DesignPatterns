<?php

namespace app\decorator;

class OilChange implements CarService
{

    protected CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost(): CarService|int
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription(): string
    {
        return $this->carService->getDescription() . ', and oil change';
    }
}
