<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 11:13 上午
 */

namespace App\PhpPatterns\create\Prototype;

/**
 * 原型模式
 * 相比于直接new一个对象，创建一个原型，然后克隆这个原型更节省资源
 *
 * 场景：
 * 比如产品今天加了个需求，支持批量向系统中导入10000份历史合同
 */
abstract class PrototypeAbstract
{
    //合同金额
    private $amount;

    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    //导入合同
    abstract public function import();

    //获取原型
    abstract public function __clone();
}
