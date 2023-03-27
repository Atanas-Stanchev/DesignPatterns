<?php

namespace app\pickStrategy;

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump('Log to database');
    }
}
