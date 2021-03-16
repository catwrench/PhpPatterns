<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 10:31 下午
 */

namespace App\PhpPatterns\action\Visitor;

use Tests\TestCase;

/**
 * 访问者模式
 * 有点类似策略模式，策略上下文随时可以替换接受不同的算法，不同的算法会带来不同的实现
 * 访问者模式是实体结构是定一个契约，将算法的操作交给外部，不再关注算法的实现，实现恒定
 *
 * 场景：
 * 创建合同的行为是恒定的，具体创建的是什么合同要看用户的需求
 */
class VisitorTest extends TestCase
{
    public function testContractVisitor()
    {
        $contract = new RentContract();
        $onlineContract = $contract->create(new OnlineVisitor());
        $offlineContract = $contract->create(new OfflineVisitor());
        $this->assertEquals('用户通过 线上 创建了租赁合同', $onlineContract);
        $this->assertEquals('用户通过 线下 创建了租赁合同', $offlineContract);
    }
}
