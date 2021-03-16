<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 12:11 上午
 */

namespace App\PhpPatterns\struct\Composite;

/**
 * 租赁合同类
 */
class RentContract extends ContractComposite
{
    public function compute(int $amount): int
    {
        foreach ($this->clauses as $clause) {
            $amount = $clause->compute($amount);
        }
        $this->setAmount($amount);
        return $amount;
    }
}
