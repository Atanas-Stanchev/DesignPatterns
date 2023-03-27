<?php

namespace app\observable\subjects;

use app\observable\interfaces\Observer;

class LoginReporter implements Observer
{

    public function handle(): void
    {
        print_r('do some form of reporting');
        echo '<br />';
    }
}
