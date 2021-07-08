<?php


namespace Uyu;


class Judge
{
    public static function tryGetNextFormula($formula)
    {

        if (preg_match('/[+-m*%]/', $formula, $array_operator)) {
            $operator = implode($array_operator);
            return $operator;
        }
        return null;
    }

    public static function quit($formula)
    {
        if (preg_match('/[quit]/', $formula, $array_operator)) {
            return true;
        }
        return false;
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
}
