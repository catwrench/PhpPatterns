<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:02 下午
 */

namespace App\PhpPatterns\create\SimpleFactory;

use App\PhpPatterns\SalesContract;
use App\PhpPatterns\RentContract;

/**
 * 简单工厂模式
 * 和静态工厂模式最大的区别是，它不是静态的，所以你可以拥有多个工厂，也可以为工厂创建子类
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
