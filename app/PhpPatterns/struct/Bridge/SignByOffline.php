<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 8:34 下午
 */

namespace App\PhpPatterns\struct\Bridge;

/**
 * 线下签订合同
 */
class SignByOffline implements SignInterface
{
    public function sign(string $contract): string
    {
        return '签订了线下'.$contract;
    }
}
