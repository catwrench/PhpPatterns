<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:32 上午
 */

namespace App\PhpPatterns\action\Command;

//租赁合同
class RentContract implements ContractInterface
{
    //合同金额
    private $amount;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function create()
    {
    }

    //优惠计算命令
    public function discountCompute(int $amount)
    {
        $this->setAmount($amount);
    }

    //递增率计算命令
    public function increaseCompute(int $amount)
    {
        $this->setAmount($amount);
    }

    //保证金计算命令
    public function depositCompute(int $amount)
    {
        $this->setAmount($amount);
    }
}
