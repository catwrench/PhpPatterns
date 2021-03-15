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
