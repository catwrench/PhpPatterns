<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 8:22 下午
 */

namespace App\PhpPatterns\struct\Bridge;

/**
 * 租客类，实现了签订合同动作
 */
class Renter extends UserAbstract
{
    //签订合同动作
    public function sign(ContractInterface $contract): string
    {
        //签订的合同类型由注入进来的合同决定
        return $this->signMethod->sign($contract->create());
    }
}
