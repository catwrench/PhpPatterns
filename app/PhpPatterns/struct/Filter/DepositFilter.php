<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:23 上午
 */

namespace App\PhpPatterns\struct\Filter;

/**
 * 合同保证金过滤器,保证金>0
 */
class DepositFilter implements FilterInterface
{
    public function filter(array $rentContracts): array
    {
        $passContracts = [];
        foreach ($rentContracts as $rentContract) {
            if ($rentContract->getDeposit() > 0) {
                $passContracts[] = $rentContract;
            }
        }
        return $passContracts;
    }
}
