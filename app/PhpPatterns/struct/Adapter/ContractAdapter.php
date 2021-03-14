<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:21 下午
 */

namespace App\PhpPatterns\struct\Adapter;

/**
 * 适配器模式
 * 目的是将一个类的接口转换为可使用的兼容接口，让原本因接口不兼容，不能一起工作的类可以一起工作。
 *
 * 这里我们有两种合同：
 * 线上合同接口：create()创建合同，electronicSignature()电子签名
 * 线下合同接口：create()创建合同，manualSignature()人工签名
 * 突然一天要求线下合同也需要录入线上，进行电子签名了，这时候就需要一个适配器
 */
class ContractAdapter implements OnlineContractInterface
{
    private $offlineContract;
    private $electronicSignature;

    public function __construct(OfflineContract $contract)
    {
        $this->offlineContract = $contract;
        $this->electronicSignature = '';
    }

    //实现线上合同的创建方法，实际是调用线下合同本身的创建方法
    public function create()
    {
        $this->offlineContract->create();
    }

    //在合同适配器中单独实现电子签名方法
    public function electronicSignature()
    {
        if ($this->electronicSignature == '') {
            $this->electronicSignature = time();
        }
    }

    public function getElectronicSignature(): string
    {
        return $this->electronicSignature;
    }
}
