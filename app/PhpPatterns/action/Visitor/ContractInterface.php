<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:29 上午
 */

namespace App\PhpPatterns\action\Visitor;

interface ContractInterface
{
    //要实现的方法......
    public function create(VisitorInterface $visitor): string;
}
