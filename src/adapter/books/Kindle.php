<?php

namespace app\adapter\books;

use app\adapter\interfaces\eReaderInterface;

class Kindle implements eReaderInterface
{
    public function turOn()
    {
        echo 'Turn the Kindle on.';
    }

    public function pressNextButton()
    {
        echo 'Press the next button on the Kindle.';
    }
}
