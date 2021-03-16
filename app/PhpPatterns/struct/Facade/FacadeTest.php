<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 4:06 下午
 */

namespace App\PhpPatterns\struct\Facade;

use Tests\TestCase;

/**
 * 外观模式
 * 把系统中类的调用委托给一个单独的类，对外隐藏了内部的复杂性，
 * 通常是嵌入多个接口到一个门面，以分离客户端和业务，但并不阻值客户端访问业务
 *
 * 场景：
 * 通过门面封装租赁合同的优惠和租金递增计算，也可以直接访问合同实例进行计算
 */
class FacadeTest extends TestCase
{
    public function testContractFacade()
    {
        //通过门面计算合同金额
        $facade = new Facade();
        $facade->setAmount(1000);
        $facade->compute();
        $amount1 = $facade->getAmount();

        //通过直接访问合同服务计算金额
        $content = new RentContract();
        $content->setAmount(1000);
        $content->discount();
        $content->increase();
        $amount2 = $content->getAmount();

        $this->assertEquals($amount1, $amount2);
    }
}
