<?php

require __DIR__ . '/vendor/autoload.php';

use Uyu\AlgorithmType;
use Uyu\Calc;
use Uyu\Player;
use Uyu\CalculationAlgorithm;

function println(string $message, $withLn = true)
{
    if ($withLn) {
        echo $message, PHP_EOL;
    } else {
        echo $message;
    }
}

function chooseAlgorithmType($operator)
{

    $codeList = array_map(function (AlgorithmType $type) {
        return $type->operator();
    }, AlgorithmType::all());


    if (array_search($operator, $codeList) === false) {
        return chooseAlgorithmType();
    }

    return AlgorithmType::ofOperator($operator);
}

println('######## 電卓もどき ########');
println('式を (演算子 x y) の形で入力してください');

$formula = fgets(STDIN);
$operator = Player::tryGetNextFormula($formula);
$nums = Player::tryGetNextNums($formula);
$algorithmType = chooseAlgorithmType($operator);

var_dump($operator);
var_dump($nums);
var_dump($algorithmType);
var_dump($tmp);
