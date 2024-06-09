<?php

namespace php;

class Result
{
    const SUCCESS = 'success';
    const FAILURE = 'failure';
    const CRITICAL_SUCCESS = 'critical success';
    const FUMBLE = 'fumble';

    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

?>
