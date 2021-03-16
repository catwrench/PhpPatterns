<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 5:15 下午
 */

namespace App\PhpPatterns\struct\Proxy;

use Tests\TestCase;

/**
 * 代理模式
 * 简单来说就是为其他对象提供一个代理，以实现对某个对象的访问
 * （感觉和外观模式的区别是，外观模式是不屏蔽直接访问底层对象的，而代理模式通常是不方便直接访问底层对象的时候使用）
 * （和装饰模式的区别是：装饰模式是对原有对象的包装，并添加扩展）
 * （和适配模式的区别是：适配模式是在连接两个接口，对接口功能进行了改变）
 *
 * 场景：
 * 科学上网（划掉）
 * 普通合同优惠100元，大客户合同可以获得1000元优惠
 */
class ProxyTest extends TestCase
{
    public function testContractProxy()
    {
        //不使用代理创建合同
        $contract = new RentContract();
        $contract->setAmount(10000);
        $contract->discount();
        $amount1 = $contract->getAmount();
        $this->assertEquals(9900, $amount1);

        //大客户合同需要使用代理创建
        $bigContract = new RentContractProxy();
        $bigContract->setAmount(100000);
        $bigContract->discount();
        $amount2 = $bigContract->getAmount();
        $this->assertEquals(99000, $amount2);
    }
}
