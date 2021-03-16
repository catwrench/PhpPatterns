<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 8:24 下午
 */

namespace App\PhpPatterns\struct\Bridge;

/**
 * 线上签订合同
 */
class SignByOnline implements SignInterface
{
    public function sign(string $contract): string
    {
        return '签订了线上'.$contract;
    }
}
