<?php

namespace app\adapter\adapters;

use app\adapter\interfaces\BookInterface;
use app\adapter\interfaces\eReaderInterface;

class eReaderAdapter implements BookInterface
{
    private eReaderInterface $reader;
    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        return $this->reader->turOn();
    }

    public function turnPage()
    {
        return $this->reader->pressNextButton();
    }
}
