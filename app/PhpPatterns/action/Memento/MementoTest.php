<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 9:56 下午
 */

namespace App\PhpPatterns\action\Memento;

use Tests\TestCase;

/**
 * 备忘录模式
 * 通过外部存储状态，提供对当前对象的修改、撤销、重置操作
 *
 * 场景：
 * 对已存在的合同进行修改需要先保存为草稿，可以对草稿进行修改或回滚，然后将草稿提交审核，审核通过后读取草稿覆盖当前合同
 */
class MementoTest extends TestCase
{
    //测试合同草稿
    public function testContractDraft()
    {
        //初始化合同
        $contract = new RentContract();
        //草稿审核通过后吃才会更新到合同上
        $contract->updateDraft('首次跟进合同');
        $contract->reviewDraft();
        $this->assertEquals('首次跟进合同', $contract->getContent());

        //测试撤回草稿
        $contract->updateDraft('二次跟进合同');
        $this->assertEquals('首次跟进合同', $contract->getContent());
        $contract->updateDraft('三次跟进合同');
        $this->assertEquals('三次跟进合同', $contract->getDraft());
        $contract->rollbackDraft();
        $this->assertEquals('二次跟进合同', $contract->getDraft());

        //审核通过后会清空草稿
        $contract->reviewDraft();
        $this->assertEquals('二次跟进合同', $contract->getContent());
        $this->assertEquals('', $contract->getDraft());
    }
}
