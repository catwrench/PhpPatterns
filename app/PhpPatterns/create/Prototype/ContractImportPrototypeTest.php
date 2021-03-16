<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 1:49 下午
 */

namespace App\PhpPatterns\create\Prototype;

use Tests\TestCase;

/**
 * 原型模式
 * 相比于直接new一个对象，创建一个原型，然后克隆这个原型更节省资源
 *
 * 场景：
 * 比如产品今天加了个需求，支持批量向系统中导入10000份历史合同
 */
class ContractImportPrototypeTest extends TestCase
{
    //测试合同导入原型
    public function testImportPrototype()
    {
        //创建一个原型
        $prototype = new ContractImportPrototype();

        for ($i = 0; $i < 10; $i++) {
            //克隆原型进行导入
            $contract = clone $prototype;
            $contract->setAmount(10000 + $i);
            $contract->import();
            $this->assertInstanceOf(ContractImportPrototype::class, $contract);
        }
    }
}
