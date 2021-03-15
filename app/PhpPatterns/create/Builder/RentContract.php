<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 9:08 下午
 */

namespace App\PhpPatterns\create\Builder;

/**
 * 租赁合同实体，实现了 RentContractInterface 接口
 */
class RentContract implements RentContractInterface
{
    //计算租期
    public function computeLeaseTerm()
    {
    }

    //计算优惠
    public function computeDiscount()
    {
    }

    //计算递增率
    public function computeIncreasingRate()
    {
    }

    //计算佣金
    public function computeCommission()
    {
    }

    //创建合同
    public function create()
    {
    }
}
