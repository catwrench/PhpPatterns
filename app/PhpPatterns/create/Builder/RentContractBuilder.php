<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 5:31 下午
 */

namespace App\PhpPatterns\create\Builder;

/**
 * 租赁合同建造者类，将租赁合同复杂的创建逻辑抽离到build方法
 */
class RentContractBuilder implements Builder
{
    private $rentContract;

    public function __construct()
    {
        $this->rentContract = new RentContract();
    }

    public function build()
    {
        $this->rentContract->computeLeaseTerm();
        $this->rentContract->computeDiscount();
        $this->rentContract->computeIncreasingRate();
        $this->rentContract->computeCommission();
        $this->rentContract->create();
    }

    //获取合同实例
    public function getContract(): RentContractInterface
    {
        return $this->rentContract;
    }
}
