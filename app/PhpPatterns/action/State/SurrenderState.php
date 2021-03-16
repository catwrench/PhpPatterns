<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 3:07 下午
 */

namespace App\PhpPatterns\action\State;

/**
 * 退租状态
 */
class SurrenderState implements StateInterface
{
    public function handle(): StateInterface
    {
        return new CompleteState();
    }
}
