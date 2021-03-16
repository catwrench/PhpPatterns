<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:28 上午
 */

namespace App\PhpPatterns\create\StaticFactory;

use App\Exceptions\BusinessException;
use Tests\TestCase;

/**
 * 静态工厂方法
 *
 * 说明：只使用一个静态方法来创建所有类型对象， 此方法通常被命名为 factory 或 build
 *
 * 注意：
 * 1、静态意味着全局状态，因为它不能被模拟进行测试，所以它是有弊端的
 * 2、不能被分类或模拟或有多个不同的实例。
 */
class StaticFactoryTest extends TestCase
{
    //测试是否能创建租赁合同
    public function testCanCreateRentContract()
    {
        $this->assertInstanceOf(
            RentContract::class,
            StaticFactory::factory('rent')
        );
    }

    //测试是否能创建销售合同
    public function testCanCreateSalesContract()
    {
        $this->assertInstanceOf(
            SalesContract::class,
            StaticFactory::factory('sales')
        );
    }

    //测试合同异常
    public function testException()
    {
        try {
            StaticFactory::factory('type');
        } catch (BusinessException $exception) {
            $this->assertTrue($exception->getCode() == 1000);
        }
    }
}
