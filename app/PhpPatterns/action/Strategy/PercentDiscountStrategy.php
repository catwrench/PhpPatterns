<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 10:46 下午
 */

namespace App\PhpPatterns\action\Strategy;

/**
 * 优惠策略：比例优惠 - 50% off
 */
class PercentDiscountStrategy implements StrategyInterface
{
    public function discount(int $amount): int
    {
        return (int) ($amount * 0.5);
    }
}
