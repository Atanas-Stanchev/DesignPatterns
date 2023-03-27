<?php

namespace app\decorator;

$service = new OilChange(new TireRotation(new BasicInspection()));

echo $service->getDescription();

echo '<br>';

echo $service->getCost();
