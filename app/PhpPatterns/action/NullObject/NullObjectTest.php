<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 3:04 下午
 */

namespace App\PhpPatterns\action\NullObject;

use Tests\TestCase;

/**
 * 空对象模式
 * 返回null时使用nullObject替代，避免了使用is_null检查这样的模板代码
 * 比如责任链中加一个空处理器，或者命令模式中加一个空命令
 *
 * 场景：
 * 比如租房主要有线下渠道的客户，线上渠道的客户，和不知道哪里来的客户
 */
class NullObjectTest extends TestCase
{
    public function testNullCustomer()
    {
        //初始化合同实例
        $contract = new RentContract();
        //创建正常客户
        $onlineCustomer = new OnlineCustomer('小明');
        $offlineCustomer = new OfflineCustomer('小强');
        //创建触发空对象的客户
        $nullCustomer = '火星人';

        $res1 = $contract->create($onlineCustomer);
        $this->assertEquals('线上客户小明签订了租赁合同', $res1);

        $res2 = $contract->create($offlineCustomer);
        $this->assertEquals('线下客户小强签订了租赁合同', $res2);

        $res3 = $contract->create($nullCustomer);
        $this->assertEquals('签订了租赁合同', $res3);
    }
}
