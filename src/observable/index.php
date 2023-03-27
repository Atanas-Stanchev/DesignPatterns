<?php

namespace app\observable;


use app\observable\subjects\EmailNotifier;
use app\observable\subjects\LogHandler;
use app\observable\subjects\LoginReporter;
use app\observable\Login;

$login = new Login();
$login->attach([
    new LogHandler(),
    new EmailNotifier(),
    new LoginReporter()
]);

$login->fire();
