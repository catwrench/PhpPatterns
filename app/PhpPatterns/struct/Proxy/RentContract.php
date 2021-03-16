<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:32 上午
 */

namespace App\PhpPatterns\struct\Proxy;

//租赁合同
class RentContract implements ContractInterface
{
    private $amount;

    public function create()
    {
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function discount()
    {
        $this->amount -= 100;
    }
}
