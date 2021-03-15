<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 1:46 下午
 */

namespace App\PhpPatterns\create\Prototype;

/**
 * 合同导入原型类
 */
class ContractImportPrototype extends PrototypeAbstract
{
    //导入合同
    public function import()
    {
    }

    //重写clone
    public function __clone()
    {
        //不复制金额
        $this->setAmount(0);
        //ps:有关联关系需要注意是否要克隆
    }
}
