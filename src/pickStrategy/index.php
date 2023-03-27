<?php

use app\pickStrategy\App;
use app\pickStrategy\LogToXWebService;

$app = new App;

$app->log('Some information', new LogToXWebService);
