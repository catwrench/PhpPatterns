<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:32 上午
 */

namespace App\PhpPatterns\action\Visitor;

//租赁合同
class RentContract implements ContractInterface
{
    public function create(VisitorInterface $visitor): string
    {
        return '用户通过 '.$visitor->getVisitor().' 创建了租赁合同';
    }
}
