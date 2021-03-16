<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 11:54 下午
 */

namespace App\PhpPatterns\struct\Composite;

/**
 * 合同优惠条款
 */
class DiscountClause extends ClauseAbstract
{
    //计算合同金额
    public function compute(int $amount): int
    {
        return $amount - 100;
    }
}
