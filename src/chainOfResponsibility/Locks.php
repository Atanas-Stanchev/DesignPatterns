<?php

namespace app\chainOfResponsibility;

class Locks extends HomeChecker
{
    public function check(HomeStatus $home): void
    {
        if ( ! $home->locked) {
            throw new \RuntimeException('The doors are not locked!!!');
//            var_dump('The doors are not locked!!!');
        }

        $this->next($home);
    }
}
