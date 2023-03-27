<?php

namespace app\adapter\books;

use app\adapter\interfaces\eReaderInterface;

class Nook implements eReaderInterface
{
    public function turOn()
    {
        echo 'Turn the Nook on.';
    }

    public function pressNextButton()
    {
        echo 'Press the next button on the Nook.';
    }
}
