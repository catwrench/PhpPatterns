<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 3:16 下午
 */

namespace App\PhpPatterns\action\State;

/**
 * 待签约状态
 */
class PendingState implements StateInterface
{
    public function handle(): StateInterface
    {
        return new PerformingState();
    }
}
