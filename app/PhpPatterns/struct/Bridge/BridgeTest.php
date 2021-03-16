<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 6:01 下午
 */

namespace App\PhpPatterns\struct\Bridge;

use Tests\TestCase;

/**
 * 桥接模式
 * 分离抽象和实现，对抽象的实现，是实体对接口的实现
 *
 * 场景：
 * 我们把用户抽象出来，拥有属性：签订动作，
 * 签订的动作抽象为接口，也就是要实现不同的签订方式
 * 具体要签订的合同在签订时由外部注入
 */
class BridgeTest extends TestCase
{
    //测试签订线上短租合同
    public function testSignOnlineShortContract()
    {
        //初始化线上签订方式
        $signMethod = new SignByOnline();
        //初始化要签订的合同类型
        $contract = new ShortContract();
        //初始化租客
        $renter = new Renter();
        //设置签订方式为线上
        $renter->setSignMethod($signMethod);
        $res = $renter->sign($contract);
        $this->assertEquals('签订了线上短租合同', $res);
    }

    //测试签订线下长租合同
    public function testSignOfflineLongContract()
    {
        //初始化线上签订方式
        $signMethod = new SignByOffline();
        //初始化要签订的合同类型
        $contract = new LongContract();
        //初始化租客
        $renter = new Renter();
        //设置签订方式为线上
        $renter->setSignMethod($signMethod);
        $res = $renter->sign($contract);
        $this->assertEquals('签订了线下长租合同', $res);
    }
}
