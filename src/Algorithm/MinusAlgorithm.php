<?php

namespace Uyu\Algorithm;

use Uyu\CalculationAlgorithm;

class MinusAlgorithm implements CalculationAlgorithm
{
    public function calc(int $num1, int $num2): int
    {
        $answer = $num1 - $num2;

        return $answer;
    }
}
