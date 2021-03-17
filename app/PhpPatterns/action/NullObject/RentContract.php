<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 3:27 下午
 */

namespace App\PhpPatterns\action\NullObject;

class RentContract implements ContractInterface
{
    public function create($customer)
    {
        //非目标客户创建一个空客户
        if (!$customer instanceof CustomerAbstract) {
            $customer = new NullCustomer('');
        }
        return $customer->sign()."签订了租赁合同";
    }
}
