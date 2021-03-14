<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 10:42 下午
 */

namespace App\PhpPatterns\action\Strategy;

/**
 * 优惠策略：固定优惠100元
 */
class FixedDiscountStrategy implements StrategyInterface
{
    public function discount(int $amount): int
    {
        return $amount - 100;
    }
}
