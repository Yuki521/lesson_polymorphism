<?php

require __DIR__ . '/vendor/autoload.php';

use Uyu\Judge;



function println(string $message, $withLn = true)
{
    if ($withLn) {
        echo $message, PHP_EOL;
    } else {
        echo $message;
    }
}

println('######## 電卓もどき ########');
println('式を (演算子(+,-,*,m,%) x y) の形で入力してください');


$operator = false;

while ($operator = true) {
    $formula = fgets(STDIN);
    if (Judge::quit($formula)) {
        break;
    }

    $operator = Judge::tryGetNextFormula($formula);
    $nums = Judge::tryGetNextNums($formula);
    // $plus = new PlusAlgorithm($num1,  $num2);
    // print $plus->calc($num1,  $num2); //
    switch ($operator) {
        case '+':
            $answer = $nums[1] + $nums[2];
            break;

        case '-':
            $answer = $nums[1] - $nums[2];
            break;

        case '*':
            $answer = $nums[1] * $nums[2];
            break;

        case 'm':
            $answer = $nums[1] / $nums[2];
            break;

        case '%':
            $answer = $nums[1] % $nums[2];
            break;
            return $answer;
    }
    println('答えは ' . $answer . ' です。');
}
