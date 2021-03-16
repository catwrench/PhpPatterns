<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 12:16 上午
 */

namespace App\PhpPatterns\struct\Composite;

use Tests\TestCase;

/**
 * 组合模式
 * 把一组相似的对象看做单一的一个对象，客户端对单个对象和组合对象的使用是一样的
 *
 * 场景：
 * 一份合同可以有优惠条款，可以有租金递增条款，可以有保证金条款，
 * 他们都会影响到合同总金额，可以组合使用也可以单独使用某一条款
 */
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
