<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:02 下午
 */

namespace App\PhpPatterns\create\SimpleFactory;

/**
 * 合同生产简单工厂
 */
class SimpleFactory
{
    //生产租赁合同
    public function buildRentContract(): RentContract
    {
        return new RentContract();
    }

    //生产售卖合同
    public function buildSalesContract(): SalesContract
    {
        return new SalesContract();
    }
}
