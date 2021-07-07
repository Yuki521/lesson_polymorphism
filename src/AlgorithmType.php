<?php

namespace Uyu;

use Uyu\Algorithm\PlusAlgorithm;
use Uyu\Algorithm\MinusAlgorithm;


/**
 * アルゴリズムの種類
 *
 * Class AlgorithmType
 *
 * @package Uyu
 */
class AlgorithmType
{
    private string $operator;
    private string $description;
    private CalculationAlgorithm $algorithm;

    /**
     * AlgorithmType constructor.
     *
     * @param int               $operator
     * @param string            $description
     * @param CalculationAlgorithm $algorithm
     */
    public function __construct(
        string $operator,
        string $description,
        CalculationAlgorithm $algorithm
    ) {
        $this->operator = $operator;
        $this->description = $description;
        $this->algorithm = $algorithm;
    }


    /**
     * 足し算をするアルゴリズム
     *
     * @return AlgorithmType
     */
    public static function PLUS(): AlgorithmType
    {
        return new AlgorithmType(
            '+',
            '足し算をします',
            new PlusAlgorithm()
        );
    }

    /**
     * 引き算をするアルゴリズム
     *
     * @return AlgorithmType
     */
    public static function MINUS(): AlgorithmType
    {
        return new AlgorithmType(
            '-',
            '引き算をします',
            new MinusAlgorithm()
        );
    }


    /**
     * @return string
     */
    public function operator(): string
    {
        return $this->operator;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
     * @return ComputerAlgorithm
     */
    public function algorithm(): CalculationAlgorithm
    {
        return $this->algorithm;
    }

    /**
     * @param string $operator
     *
     * @return AlgorithmType
     */
    public static function ofOperator(string $operator): AlgorithmType
    {
        return [
            self::PLUS()->operator() => self::PLUS(),
            self::MINUS()->operator() => self::MINUS(),
        ][$operator];
    }

    /**
     * @return AlgorithmType[]
     */
    public static function all(): array
    {
        return [
            self::PLUS(),
            self::MINUS(),
        ];
    }
}
