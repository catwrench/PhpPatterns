<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:22 下午
 */

namespace App\PhpPatterns\action\Strategy;

/**
 * 策略上下文
 * 提供对策略的统一执行入口
 */
class StrategyContext
{
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    //执行策略
    public function do(int $amount): int
    {
        return $this->strategy->discount($amount);
    }
}

