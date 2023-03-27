<?php

namespace app\chainOfResponsibility;

class Lights extends HomeChecker
{
    public function check(HomeStatus $home): void
    {
        if ( ! $home->lightsOff) {
            throw new \RuntimeException('The lights are still on!!!');
//            var_dump('The lights are still on!!!');
        }

        $this->next($home);
    }
}
