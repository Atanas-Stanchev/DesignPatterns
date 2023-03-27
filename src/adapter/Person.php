<?php

namespace app\adapter;

use app\adapter\interfaces\BookInterface;

class Person
{
    public function read(BookInterface $book): void
    {
        $book->open();
        echo '<br />';
        echo '<br />';
        $book->turnPage();
    }
}
