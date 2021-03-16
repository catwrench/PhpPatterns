<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:47 下午
 */

namespace App\PhpPatterns\action\Command;

/**
 * 保证金条款命令，执行时调用合同的increaseCompute
 */
class DepositCommand implements ClauseCommandInterface
{
    private $contract;

    public function __construct(RentContract $contract)
    {
        $this->contract = $contract;
    }

    public function exec()
    {
        $amount = $this->contract->getAmount();
        $amount = $amount + 1000;
        $this->contract->depositCompute($amount);
    }
}
