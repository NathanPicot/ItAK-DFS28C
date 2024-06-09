<?php

namespace php;

require_once 'Result.php';

trait Randomizable
{
    public function getRandomResult($rates)
    {
        $random = rand(1, 100);
        if ($random <= $rates['success']) {
            return new Result(Result::SUCCESS);
        } elseif ($random <= $rates['success'] + $rates['critical']) {
            return new Result(Result::CRITICAL_SUCCESS);
        } elseif ($random <= $rates['success'] + $rates['critical'] + $rates['fumble']) {
            return new Result(Result::FUMBLE);
        } else {
            return new Result(Result::FAILURE);
        }
    }
}

?>
