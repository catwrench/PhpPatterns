<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 8:21 下午
 */

namespace App\PhpPatterns\struct\Bridge;

/**
 * 用户接口，定义了有签订合同动作
 */
abstract class UserAbstract
{
    //签订的方式
    protected $signMethod;

    //签订合同动作
    public function setSignMethod(SignInterface $sign)
    {
        $this->signMethod = $sign;
    }

    //签订行为
    abstract public function sign(ContractInterface $contract): string;
}
