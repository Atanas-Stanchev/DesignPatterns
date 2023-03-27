<?php

use app\chainOfResponsibility\Lights;
use app\chainOfResponsibility\Locks;
use app\chainOfResponsibility\Alarm;
use app\chainOfResponsibility\HomeStatus;

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->setSuccessor($lights);
$lights->setSuccessor($alarm);

$locks->check(new HomeStatus);
