<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 10:50 下午
 */

namespace App\PhpPatterns\action\Strategy;

use Tests\TestCase;

/**
 * 策略模式
 * 策略模式主要是定义了一系列算法，把他们封装起来，使他们可以互相替换。策略模式可以让算法独立于使用他们的对象变化
 *
 * 场景：
 * 针对合同有不同的优惠策略，将不同的优惠策略封装起来，可以独立使用
 */
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
