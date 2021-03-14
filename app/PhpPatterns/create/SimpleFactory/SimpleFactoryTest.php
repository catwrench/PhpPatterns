<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:08 下午
 */

namespace App\PhpPatterns\create\SimpleFactory;

use App\PhpPatterns\create\StaticFactory\StaticFactory;
use App\PhpPatterns\RentContract;
use App\PhpPatterns\SalesContract;
use Tests\TestCase;

class SimpleFactoryTest extends TestCase
{
    //测试是否能创建租赁合同
    public function testCanCreateRentContract()
    {
        $contract = (new SimpleFactory())->buildRentContract();
        $this->assertInstanceOf(RentContract::class, $contract);
    }

    //测试是否能创建销售合同
    public function testCanCreateSalesContract()
    {
        $contract = (new SimpleFactory())->buildSalesContract();
        $this->assertInstanceOf(SalesContract::class, $contract);
    }
}
