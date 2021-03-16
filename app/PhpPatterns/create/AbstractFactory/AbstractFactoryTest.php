<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:08 下午
 */

namespace App\PhpPatterns\create\AbstractFactory;

use Tests\TestCase;

/**
 * 抽象工厂模式
 * 抽象工厂模式和简单工厂模式的区别在于，抽象工厂不关心这些类是如何创建和运行的，通常他们都实现了相同的接口
 */
class AbstractFactoryTest extends TestCase
{
    //测试是否能创建租赁合同
    public function testCanCreateRentContract()
    {
        $contract = (new AbstractFactory())->buildRentContract();
        $this->assertInstanceOf(ContractInterface::class, $contract);
    }

    //测试是否能创建销售合同
    public function testCanCreateSalesContract()
    {
        $contract = (new AbstractFactory())->buildSalesContract();
        $this->assertInstanceOf(ContractInterface::class, $contract);
    }
}
