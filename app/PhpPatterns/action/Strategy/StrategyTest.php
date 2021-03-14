<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 10:50 下午
 */

namespace App\PhpPatterns\action\Strategy;

use Tests\TestCase;

class StrategyTest extends TestCase
{
    //测试比例优惠策略
    public function testPercentStrategy()
    {
        $context = new StrategyContext(new PercentDiscountStrategy());
        $amount = $context->do(100);
        $this->assertEquals(50, $amount);
    }

    //测试固定优惠策略
    public function testFixedStrategy()
    {
        $context = new StrategyContext(new FixedDiscountStrategy());
        $amount = $context->do(100);
        $this->assertEquals(0, $amount);
    }
}
