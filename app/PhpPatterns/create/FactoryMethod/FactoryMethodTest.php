<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:08 下午
 */

namespace App\PhpPatterns\create\FactoryMethod;

use App\PhpPatterns\ContractInterface;
use App\PhpPatterns\RentContract;
use App\PhpPatterns\SalesContract;
use Tests\TestCase;

class FactoryMethodTest extends TestCase
{
    //测试是否能创建租赁合同
    public function testCanCreateRentContract()
    {
        $contract = (new RentContractFactory())->createContract();
        $this->assertInstanceOf(RentContract::class, $contract);
    }

    //测试是否能创建销售合同
    public function testCanCreateSalesContract()
    {
        $contract = (new SalesContractFactory())->createContract();
        $this->assertInstanceOf(SalesContract::class, $contract);
    }
}
