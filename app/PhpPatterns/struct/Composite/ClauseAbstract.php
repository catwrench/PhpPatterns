<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 11:51 下午
 */

namespace App\PhpPatterns\struct\Composite;

//合同条款抽象类
abstract class ClauseAbstract
{
    //计算条款金额
    abstract public function compute(int $amount): int;
}
