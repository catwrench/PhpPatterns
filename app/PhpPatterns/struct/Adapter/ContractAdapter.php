<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:21 下午
 */

namespace App\PhpPatterns\struct\Adapter;

/**
 * 合同适配器
 * 适配器自身实现了在线合同接口，并包装了线下合同，以完成线下合同对线上合同的适配
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
