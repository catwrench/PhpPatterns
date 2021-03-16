<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 1:15 下午
 */

namespace App\PhpPatterns\struct\Filter;

interface FilterInterface
{
    public function filter(array $rentContracts): array;
}
