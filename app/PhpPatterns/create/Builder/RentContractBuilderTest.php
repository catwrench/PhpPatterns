<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 9:23 下午
 */

namespace App\PhpPatterns\create\Builder;

use Tests\TestCase;

class RentContractBuilderTest extends TestCase
{
    //测试租赁合同建造器
    public function testBuilder()
    {
        $builder = new RentContractBuilder();
        $builder->build();
        $rentContract = $builder->getContract();
        $this->assertInstanceOf(RentContract::class, $rentContract);
    }
}
