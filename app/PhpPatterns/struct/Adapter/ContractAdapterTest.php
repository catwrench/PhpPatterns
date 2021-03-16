<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 5:37 下午
 */

namespace App\PhpPatterns\struct\Adapter;

use Tests\TestCase;

/**
 * 适配器模式
 * 目的是将一个类的接口转换为可使用的兼容接口，让原本因接口不兼容，不能一起工作的类可以一起工作。
 *
 * 场景：
 * 这里我们有两种合同：
 * 线上合同接口：create()创建合同，electronicSignature()电子签名
 * 线下合同接口：create()创建合同，manualSignature()人工签名
 * 突然一天要求线下合同也需要录入线上，进行电子签名了，这时候就需要一个适配器
 */
class ContractAdapterTest extends TestCase
{
    //测试线上合同否能进行电子签名
    public function testOnlineContractCanElectronicSignature()
    {
        $onlineContract = new OnlineContract();
        $onlineContract->electronicSignature();
        $electronicSignature = $onlineContract->getElectronicSignature();
        $this->assertTrue($electronicSignature != '');
    }

    //测试线下合同否能进行电子签名
    public function testOfflineContractCanElectronicSignature()
    {
        $offlineContract = new OfflineContract();
        $adapter = new ContractAdapter($offlineContract);
        $adapter->electronicSignature();
        $electronicSignature = $adapter->getElectronicSignature();
        $this->assertTrue($electronicSignature != '');
    }
}
