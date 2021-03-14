<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 5:23 下午
 */

namespace App\PhpPatterns\struct\Adapter;

use App\PhpPatterns\ContractInterface;

//线下合同接口
interface OfflineContractInterface extends ContractInterface
{
    //人工签名
    public function manualSignature();
}
