<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 5:45 下午
 */

namespace App\PhpPatterns\struct\Proxy;

/**
 * 租赁合同代理类
 */
class RentContractProxy extends RentContract
{
    //是否大客户
    private $isBigCustomer;

    public function __construct()
    {
        $this->isBigCustomer = true;
    }

    //大客户优惠
    public function discount()
    {
        if ($this->isBigCustomer) {
            $this->setAmount($this->getAmount() - 1000);
        } else {
            parent::discount();
        }
    }
}
