<?php

namespace app\pickStrategy;
class App {
    public function log($data, Logger $logger = null): void
    {
        $logger = $logger ?: new LogToFile;

        $logger->log($data);
    }
}
