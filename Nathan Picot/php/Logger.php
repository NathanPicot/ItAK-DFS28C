<?php

namespace php;

class Logger
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    public function log($message)
    {
        echo $message . PHP_EOL;
    }
}

?>
