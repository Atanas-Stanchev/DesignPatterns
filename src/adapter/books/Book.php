<?php

namespace app\adapter\books;

use app\adapter\interfaces\BookInterface;

class Book implements BookInterface
{
    public function open()
    {
        echo 'Opening the paper book.';
    }

    public function turnPage()
    {
        echo 'Turning the page of the paper book.';
    }
}
