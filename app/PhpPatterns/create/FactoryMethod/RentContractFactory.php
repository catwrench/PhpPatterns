<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:33 下午
 */

namespace App\PhpPatterns\create\FactoryMethod;

class RentContractFactory implements FactoryMethod
{
    public function createContract(): ContractInterface
    {
        return new RentContract();
    }
}
