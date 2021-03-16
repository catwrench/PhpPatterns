<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:29 下午
 */

namespace App\PhpPatterns\create\FactoryMethod;

/**
 * 合同工厂方法
 * 定义了定义了工厂要生产什么标准的合同
 */
interface FactoryMethod
{
    public function createContract(): ContractInterface;
}
