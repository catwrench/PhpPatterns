<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 3:46 下午
 */

namespace App\PhpPatterns\action\Iterator;

use Tests\TestCase;

/**
 * 迭代器模式
 * 无需暴露对象内部结构即可实现对对象的遍历，php
 *
 * 场景：
 * 实现一个迭代器遍历合同列表
 */
class IteratorTest extends TestCase
{
    public function testContractIterator()
    {
        //通过循环获取创建的合同编号
        $snArray = [];
        $contracts = [];
        for ($i = 0; $i < 5; $i++) {
            $contract = new RentContract();
            $contracts[] = $contract;
            $snArray [] = $contract->getSn();
        }

        //通过迭代器获取创建的合同编号
        $iterator = new ContractListIterator();
        $iterator->addList($contracts);
        $snArray2 = [];
        do {
            $contract = $iterator->current();
            $snArray2 [] = $contract->getSn();
        } while ($iterator->hasNext());

        $this->assertEquals($snArray, $snArray2);
    }
}
