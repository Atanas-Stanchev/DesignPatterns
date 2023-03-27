<?php

namespace app\observable\interfaces;

interface Subject
{
    public function attach($observable);
    public function detach($index);
    public function notify();
}
