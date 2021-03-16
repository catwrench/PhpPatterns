<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:32 上午
 */

namespace App\PhpPatterns\struct\Facade;

/**
 * 租赁合同类
 * 有优惠和递增两个方法
 */
class RentContract implements ContractInterface
{
    private $amount;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }

    public function create()
    {
    }

    //合同金额 固定优惠100
    public function discount()
    {
        $this->amount -= 100;
    }

    //合同金额 递增10%
    public function increase()
    {
        $this->amount = $this->amount * 1.1;
    }
}
