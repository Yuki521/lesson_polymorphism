<?php


namespace Uyu;


/**
 * 演算を表すインターフェース。
 */
interface CalculationAlgorithm
{
  /**
   *  @param $num1 演算対象の整数
   *  @param $num2 演算対象の整数
   *  @return 演算結果
   */
  public function calc(int $num1, int $num2): int;
}
