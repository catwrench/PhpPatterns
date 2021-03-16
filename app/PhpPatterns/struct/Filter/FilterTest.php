<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:23 上午
 */

namespace App\PhpPatterns\struct\Filter;

use Tests\TestCase;

/**
 * 过滤器模式
 * 可以使用不同的标准来对同一组对象进行过滤
 *
 * 场景：
 * 需要筛选有价值的合同，长租合同要有保证金，且租期至少为半年，不满足条件的过滤掉
 */
class FilterTest extends TestCase
{
    public function testContractFilter()
    {
        //租期小于半年的合同
        $contracts[] = new RentContract('2021-03-16', '2021-04-16', 1000, 100);
        //保证金为0的合同
        $contracts[] = new RentContract('2021-03-16', '2021-10-16', 1000, 0);
        //租期大于半年且有保证金的合同
        $contracts[] = new RentContract('2021-03-16', '2021-10-16', 1000, 100);

        //初始化过滤器
        $depositFilter = new DepositFilter();
        $leaseTermFilter = new LeaseTermFilter();

        //执行过滤
        $contracts = $depositFilter->filter($contracts);
        $contracts = $leaseTermFilter->filter($contracts);

        //过滤完只剩下一份满足条件的合同
        $this->assertTrue(sizeof($contracts) == 1);
    }
}
