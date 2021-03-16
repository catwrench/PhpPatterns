<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 3:07 下午
 */

namespace App\PhpPatterns\action\State;

/**
 * 状态接口，调用handle处理方法时，会返回另一个状态对象，上下文类状态的变化都由外部的这个状态类来进行操纵
 */
interface StateInterface
{
    public function handle(): StateInterface;
}
