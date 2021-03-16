<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:32 上午
 */

namespace App\PhpPatterns\struct\Bridge;

//短租合同
class ShortContract implements ContractInterface
{
    public function create(): string
    {
        return '短租合同';
    }
}
