<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:08 下午
 */

namespace App\PhpPatterns\create\FactoryMethod;

use Tests\TestCase;

/**
 * 工厂方法模式
 * 工厂方法模式实现 S.O.L.I.D 中的依赖倒置原则，工厂本体可能只是一个接口，可以在它的子类用不同的方法来创建一个对象，
 * 这决定了工厂方法模式如何生成对象，取决于抽象类，而不是具体类
 *
 * 场景：
 * 合同工厂定义了通用的合同接口，之类自行决定要生产何种类型的符合接口规范的合同
 */
class FactoryMethodTest extends TestCase
{
    //测试是否能创建租赁合同
    public function testCanCreateRentContract()
    {
        $contract = (new RentContractFactory())->createContract();
        $this->assertInstanceOf(RentContract::class, $contract);
    }

    //测试是否能创建销售合同
    public function testCanCreateSalesContract()
    {
        $contract = (new SalesContractFactory())->createContract();
        $this->assertInstanceOf(SalesContract::class, $contract);
    }
}
