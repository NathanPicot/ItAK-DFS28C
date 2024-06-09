<?php

namespace php;

class Coin
{
    private $flips;

    public function __construct($flips)
    {
        $this->flips = $flips;
    }

    public function flip()
    {
        for ($i = 0; $i < $this->flips; $i++) {
            if (rand(0, 1) == 0) {
                return 0;
            }
        }
        return 1;
    }
}

?>
