<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 11:58 下午
 */

namespace App\PhpPatterns\struct\Composite;

class DepositClause extends ClauseAbstract
{
    //设置到期是否退还保证金
    public function isRefund()
    {
    }

    //计算保证金（本金的10%）
    public function compute(int $amount): int
    {
        return (int) $amount + 0.1 * $amount;
    }
}
