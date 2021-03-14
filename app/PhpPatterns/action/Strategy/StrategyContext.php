<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:22 下午
 */

namespace App\PhpPatterns\action\Strategy;

/**
 * 策略模式
 * 策略模式主要是定义了一系列算法，把他们封装起来，使他们可以互相替换。策略模式可以让算法独立于使用他们的对象变化
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

