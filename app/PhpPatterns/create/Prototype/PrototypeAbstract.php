<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 11:13 上午
 */

namespace App\PhpPatterns\create\Prototype;

/**
 * 合同导入抽象原型
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
