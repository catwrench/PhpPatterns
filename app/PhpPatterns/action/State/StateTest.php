<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 1:47 下午
 */

namespace App\PhpPatterns\action\State;

use Tests\TestCase;

/**
 * 状态模式
 * 允许一个对象在其内部状态发生改变时，改变他的行为
 *
 * 场景：
 * 租赁合同状态：待签约、履行中、已退租、已完成状态
 * 每个状态有自己的行为
 * 待签约：缴纳保证金推进到履行中
 * 履行中：缴纳每期租金直到合同到期，变更为已退租
 * 已退租：确认账单结清后转变为已完成
 */
class StateTest extends TestCase
{
    public function testContractState()
    {
        //初始化合同实例
        $content = new RentContract();
        //初始化并设置合同状态为待签约
        $pendingState = new PendingState();
        $content->setState($pendingState);

        //跟进，合同状态转变为履行中
        $content->follow();
        $this->assertInstanceOf(PerformingState::class, $content->getState());

        //跟进，合同状态转变为已退租
        $content->follow();
        $this->assertInstanceOf(SurrenderState::class, $content->getState());

        //跟进，合同状态转变为已完成
        $content->follow();
        $this->assertInstanceOf(CompleteState::class, $content->getState());
    }
}
