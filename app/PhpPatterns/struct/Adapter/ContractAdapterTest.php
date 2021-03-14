<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 5:37 下午
 */

namespace App\PhpPatterns\struct\Adapter;

use Tests\TestCase;

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
