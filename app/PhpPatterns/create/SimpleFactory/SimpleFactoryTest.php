<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:08 下午
 */

namespace App\PhpPatterns\create\SimpleFactory;

use Tests\TestCase;

/**
 * 简单工厂模式
 * 和静态工厂模式最大的区别是，它不是静态的，所以你可以拥有多个工厂，也可以为工厂创建子类
 */
class SimpleFactoryTest extends TestCase
{
    //测试是否能创建租赁合同
    public function testCanCreateRentContract()
    {
        $contract = (new SimpleFactory())->buildRentContract();
        $this->assertInstanceOf(RentContract::class, $contract);
    }

    //测试是否能创建销售合同
    public function testCanCreateSalesContract()
    {
        $contract = (new SimpleFactory())->buildSalesContract();
        $this->assertInstanceOf(SalesContract::class, $contract);
    }
}
