<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 12:03 上午
 */

namespace App\PhpPatterns\struct\Decorator;

use Tests\TestCase;

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
