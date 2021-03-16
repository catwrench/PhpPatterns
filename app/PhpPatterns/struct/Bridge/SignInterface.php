<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 8:24 下午
 */

namespace App\PhpPatterns\struct\Bridge;

/**
 * 签订动作接口，定义了签订合同这个行为
 */
interface SignInterface
{
    public function sign(string $contract): string;
}
