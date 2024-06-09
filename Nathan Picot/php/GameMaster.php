<?php

namespace php;

class GameMaster
{
    private $elements;

    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    public function pleaseGiveMeACrit()
    {
        $element = $this->elements[array_rand($this->elements)];
        $result = null;

        if ($element instanceof Dice) {
            $result = $element->roll();
        } elseif ($element instanceof Coin) {
            $result = $element->flip();
        } elseif ($element instanceof Deck) {
            $result = $element->draw();
        }

        return $this->calculateResult($result);
    }

    private function calculateResult($result)
    {
        // Assume result is within 1-6 for simplicity
        if ($result <= 2) {
            return 'fumble';
        } elseif ($result <= 4) {
            return 'success';
        } elseif ($result <= 6) {
            return 'critical';
        }
        return 'failure';
    }
}

?>
