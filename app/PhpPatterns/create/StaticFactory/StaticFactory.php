<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:28 上午
 */

namespace App\PhpPatterns\create\StaticFactory;

use App\Exceptions\BusinessException;
use App\PhpPatterns\ContractInterface;
use App\PhpPatterns\SalesContract;
use App\PhpPatterns\RentContract;

/**
 * 静态工厂方法
 *
 * 说明：只使用一个静态方法来创建所有类型对象， 此方法通常被命名为 factory 或 build
 *
 * 注意：
 * 1、静态意味着全局状态，因为它不能被模拟进行测试，所以它是有弊端的
 * 2、不能被分类或模拟或有多个不同的实例。
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
