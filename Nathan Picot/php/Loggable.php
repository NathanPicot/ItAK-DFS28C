<?php

namespace php;

require_once 'Logger.php';

trait Loggable
{
    protected function log($message)
    {
        Logger::getInstance()->log($message);
    }
}

?>
