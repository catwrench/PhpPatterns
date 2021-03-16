<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:32 上午
 */

namespace App\PhpPatterns\struct\Filter;

//租赁合同
class RentContract implements ContractInterface
{
    //租赁开始时间
    private $sTime;
    //租赁结束时间
    private $eTime;
    //租金
    private $amount;
    //保证金
    private $deposit;

    public function __construct($sTime, $eTime, $amount, $deposit)
    {
        $this->sTime = $sTime;
        $this->eTime = $eTime;
        $this->amount = $amount;
        $this->deposit = $deposit;
    }

    public function create()
    {
    }

    public function getSTime()
    {
        return $this->sTime;
    }

    public function setSTime($sTime)
    {
        $this->sTime = $sTime;
    }

    public function getETime()
    {
        return $this->eTime;
    }

    public function setETime($eTime)
    {
        $this->eTime = $eTime;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getDeposit()
    {
        return $this->deposit;
    }

    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;
    }
}
