<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 11:56 下午
 */

namespace App\PhpPatterns\struct\Composite;

class IncreaseClause extends ClauseAbstract
{
    //设置递增开始时间
    public function setStartTime()
    {
    }

    //计算合同金额
    public function compute(int $amount): int
    {
        return $amount * 2;
    }
}
