<?php

namespace app\chainOfResponsibility;

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home): void
    {
        if ( ! $home->alarmOn) {
            throw new \RuntimeException('The alarms has not been set!!!');
//            var_dump('The alarms has not been set!!!');
        }

        $this->next($home);
    }
}
