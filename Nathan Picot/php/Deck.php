<?php

namespace php;

class Deck
{
    private $colors;
    private $values;

    public function __construct($colors, $values)
    {
        $this->colors = $colors;
        $this->values = $values;
    }

    public function draw()
    {
        $color = rand(1, $this->colors);
        $value = rand(1, $this->values);
        return ($color - 1) * $this->values + $value;
    }
}

?>
