<?php

namespace app\observable\subjects;

use app\observable\interfaces\Observer;

class EmailNotifier implements Observer
{

    public function handle(): void
    {
        print_r('fire off an email');
        echo '<br />';
    }
}
