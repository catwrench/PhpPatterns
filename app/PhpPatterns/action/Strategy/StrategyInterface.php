<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 10:38 下午
 */

namespace App\PhpPatterns\action\Strategy;

/**
 * 合同优惠策略，定义了统一的优惠执行方法
 */
interface StrategyInterface
{
    /**
     * @param  int  $amount  合同金额
     *
     * @return Integer
     */
    public function discount(int $amount): int;
}
