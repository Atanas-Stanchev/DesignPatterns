<?php

namespace app\observable\subjects;

use app\observable\interfaces\Observer;

class LogHandler implements Observer
{

    public function handle(): void
    {
        print_r('Login Handler');
        echo '<br />';
    }
}
