<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 11:32 上午
 */

namespace App\PhpPatterns\action\State;

/**
 * 租赁合同类
 * 实现了合同接口
 * 提供了状态上下文的处理：调用handle处理方法时，会返回另一个状态对象，上下文类状态的变化都由外部的这个状态类来进行操纵
 */
class RentContract implements ContractInterface
{
    private $state;

    public function getState(): StateInterface
    {
        return $this->state;
    }

    public function setState(StateInterface $state)
    {
        //设置当前状态为状态实例
        $this->state = $state;
    }

    public function create()
    {
    }

    //进行状态跟进
    public function follow()
    {
        //调用handle处理方法时，会返回另一个状态对象，上下文类状态的变化都由外部的这个状态类来进行操纵
        $this->state = $this->state->handle();
    }
}
