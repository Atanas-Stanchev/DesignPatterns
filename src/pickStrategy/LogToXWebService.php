<?php

namespace app\pickStrategy;

class LogToXWebService implements Logger
{
    public function log($data)
    {
        var_dump('Log to Saas');
    }
}
