<?php


namespace Uyu;

/**
 * ゲーム盤。
 *
 * @package Uyu
 */
class Calc
{

  public static function make($nums1, $nums2)
  {
    $position = new Calc($nums1, $nums2);
    return new Calc($nums1, $nums2);
  }
}
