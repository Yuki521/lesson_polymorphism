<?php


namespace Uyu;

use CalculationAlgorithm;

class Player
{
    public static function tryGetNextFormula($formula)
    {

        if (!preg_match('/[+-m*]/', $formula, $array_operator)) {
            return null;
        }
        $operator = implode($array_operator);
        return $operator;
    }

    public static function tryGetNextNums($formula)
    {
        $nums = explode(' ', trim($formula));

        if (count($nums) !== 3) {
            return null;
        }
        if (!is_numeric($nums[1]) || !is_numeric($nums[2])) {
            return null;
        }

        return $nums;
    }

    public function nextFormula($nums)
    {
        $position = $this->tryGetNextNums($nums);
        if ($position !== null) {
            return $position;
        }

        return $this->CalculationAlgorithm::calc($nums[1], $nums[2]);
    }
}
