<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:28 上午
 */

namespace App\PhpPatterns\create\StaticFactory;

use App\Exceptions\BusinessException;

/**
 * 合同静态工厂
 */
final class StaticFactory
{
    public static function factory(string $type): ContractInterface
    {
        switch ($type) {
            case 'rent':
                return new RentContract();
            case 'sales':
                return new SalesContract();
            default:
                throw new BusinessException(1000, ['params' => '未知的合同类型']);
        }
    }
}
