<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 11:49 上午
 */

namespace App\PhpPatterns\action\Mediator;

use Tests\TestCase;

/**
 * 中介者模式
 * 不同对象之间的通信不是直接互相调用，而是通过中介对象进行调用，
 * 可以独立的改变对象之间的交互，不影响到其他对象
 *
 * 场景：
 * 租客租房通常都是通过中介，看到合适的房屋就联系中介租房，房东通过中介把房子租出去
 */
class MediatorTest extends TestCase
{
    public function testMediator()
    {
        //创建房屋实例
        $house1 = new House();
        //创建租客/房东实例
        $tenant = new Tenant('小明');
        $landlord = new Landlord('小强');
        //为租客房东添加中介
        $mediator = new HouseMediator();
        $tenant->setMediator($mediator);
        $landlord->setMediator($mediator);
        //在中介注册租客和房东
        $mediator->addTenant($tenant, $house1);
        $mediator->addLandlord($landlord, $house1);

        //通过中介租房
        $res1 = $mediator->rent($tenant);
        $this->assertEquals('通过中介 房东：小强，出租了房屋给租客：小明', $res1);

        //直接租房
        $res2 = $landlord->doSomething($tenant);
        $this->assertEquals('房东：小强，出租了房屋给租客：小明', $res2);
    }
}
