<?php

namespace app\adapter;

use app\adapter\books\Book;
use app\adapter\books\Kindle;
use app\adapter\adapters\KindleAdapter;

use app\adapter\books\Nook;
use app\adapter\adapters\eReaderAdapter;

// Paper book
$person = new Person();
$person->read(new Book);
//(new Person)->read(new Book());

// Kindle
//(new Person)->read(new KindleAdapter(new Kindle()));
//(new Person)->read(new eReaderAdapter(new Kindle()));

// Nook
//(new Person)->read(new eReaderAdapter(new Nook()));
