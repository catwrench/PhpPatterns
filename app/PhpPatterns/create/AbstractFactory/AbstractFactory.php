<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:17 下午
 */

namespace App\PhpPatterns\create\AbstractFactory;

use App\PhpPatterns\ContractInterface;
use App\PhpPatterns\RentContract;
use App\PhpPatterns\SalesContract;

/**
 * 抽象工厂模式
 * 抽象工厂模式和简单工厂模式的区别在于，抽象工厂不关心这些类是如何创建和运行的，通常他们都实现了相同的接口
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
