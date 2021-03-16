<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:45 下午
 */

namespace App\PhpPatterns\action\Command;

/**
 * 递增条款命令，执行时调用合同的increaseCompute
 */
class IncreaseCommand implements ClauseCommandInterface
{
    private $contract;

    public function __construct(RentContract $contract)
    {
        $this->contract = $contract;
    }

    public function exec()
    {
        $amount = $this->contract->getAmount();
        $amount = $amount * 1.1;
        $this->contract->increaseCompute($amount);
    }
}
