<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 4:06 下午
 */

namespace App\PhpPatterns\struct\Facade;

/**
 * 合同门面
 */
class Facade
{
    private $contract;

    public function __construct()
    {
        $this->contract = new RentContract();
    }

    //获取合同金额
    public function getAmount()
    {
        return $this->contract->getAmount();
    }

    //设置合同金额
    public function setAmount(int $amount)
    {
        $this->contract->setAmount($amount);
    }

    //合同金额计算
    public function compute()
    {
        $this->contract->discount();
        $this->contract->increase();
    }
}
