<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:34 上午
 */

namespace App\PhpPatterns\struct\Bridge;

//长租合同
class LongContract implements ContractInterface
{
    public function create(): string
    {
        return '长租合同';
    }
}
