<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 12:03 上午
 */

namespace App\PhpPatterns\struct\Decorator;

use Tests\TestCase;

/**
 * 装饰器模式
 * 装饰器模式可以动态的为实例增加方法
 *
 * 场景：
 * 我们有了租赁合同，这个时候我们有了新的需求需要将合同金额的10%作为佣金，通过装饰器模式为合同添加佣金属性
 */
class DecoratorTest extends TestCase
{
    //测试佣金装饰器
    public function testCommissionDecorator()
    {
        $decorator = new CommissionDecorator(new RentContract());
        $decorator->setAmount(100);
        $decorator->create();
        $commission = $decorator->getCommission();
        $this->assertEquals(10, $commission);
    }
}
