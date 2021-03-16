<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:17 下午
 */

namespace App\PhpPatterns\create\AbstractFactory;

/**
 * 合同抽象工厂
 */
class AbstractFactory
{
    //生产租赁合同
    public function buildRentContract(): ContractInterface
    {
        return new RentContract();
    }

    //生产售卖合同
    public function buildSalesContract(): ContractInterface
    {
        return new SalesContract();
    }
}
