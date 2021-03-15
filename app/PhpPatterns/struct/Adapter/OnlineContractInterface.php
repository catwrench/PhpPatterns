<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 5:23 下午
 */

namespace App\PhpPatterns\struct\Adapter;

//线上合同接口
interface OnlineContractInterface extends ContractInterface
{
    //电子签名
    public function electronicSignature();
}
