<?php

namespace app\adapter\adapters;

use app\adapter\books\Kindle;
use app\adapter\interfaces\BookInterface;

class KindleAdapter implements BookInterface
{
    private Kindle $kindle;
    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        return $this->kindle->turOn();
    }

    public function turnPage()
    {
        return $this->kindle->pressNextButton();
    }
}
