<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 1:49 下午
 */

namespace App\PhpPatterns\create\Prototype;

use Tests\TestCase;

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
