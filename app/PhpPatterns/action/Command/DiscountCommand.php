<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:41 下午
 */

namespace App\PhpPatterns\action\Command;

/**
 * 优惠条款命令，执行时调用合同的discountCompute
 */
class DiscountCommand implements ClauseCommandInterface
{
    private $contract;

    public function __construct(RentContract $contract)
    {
        $this->contract = $contract;
    }

    public function exec()
    {
        $amount = $this->contract->getAmount();
        $amount = $amount - 100;
        $this->contract->discountCompute($amount);
    }
}
