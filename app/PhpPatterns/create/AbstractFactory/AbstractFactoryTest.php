<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:08 下午
 */

namespace App\PhpPatterns\create\AbstractFactory;

use App\PhpPatterns\ContractInterface;
use Tests\TestCase;

class AbstractFactoryTest extends TestCase
{
    //测试是否能创建租赁合同
    public function testCanCreateRentContract()
    {
        $contract = (new AbstractFactory())->buildRentContract();
        $this->assertInstanceOf(ContractInterface::class, $contract);
    }

    //测试是否能创建销售合同
    public function testCanCreateSalesContract()
    {
        $contract = (new AbstractFactory())->buildSalesContract();
        $this->assertInstanceOf(ContractInterface::class, $contract);
    }
}
