<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 12:16 上午
 */

namespace App\PhpPatterns\struct\Composite;

use Tests\TestCase;

class CompositeTest extends TestCase
{
    //测试不同条款的组合计算
    public function testContractComposite()
    {
        $contract = new RentContract();
        $contract->addClause(new DiscountClause());
        $contract->addClause(new IncreaseClause());
        $contract->addClause(new DepositClause());
        $amount = $contract->compute(1000);
        $this->assertEquals((1000 - 100) * 2 * 1.1, $amount);
    }
}
