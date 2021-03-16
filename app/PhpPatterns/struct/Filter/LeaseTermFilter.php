<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 1:22 下午
 */

namespace App\PhpPatterns\struct\Filter;

use Carbon\Carbon;

/**
 * 合同租期过滤器,租期至少为半年
 */
class LeaseTermFilter implements FilterInterface
{
    public function filter(array $rentContracts): array
    {
        $passContracts = [];
        foreach ($rentContracts as $rentContract) {
            $sTime = $rentContract->getSTime();
            $eTime = $rentContract->getETime();
            if (Carbon::parse($sTime)->addMonths(6)->lte(Carbon::parse($eTime))) {
                $passContracts[] = $rentContract;
            }
        }
        return $passContracts;
    }
}
