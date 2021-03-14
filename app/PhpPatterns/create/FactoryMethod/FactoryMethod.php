<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 2:29 下午
 */

namespace App\PhpPatterns\create\FactoryMethod;

use App\PhpPatterns\ContractInterface;

/**
 * 工厂方法模式
 * 工厂方法模式实现 S.O.L.I.D 中的依赖倒置原则，工厂本体可能只是一个接口，可以在它的子类用不同的方法来创建一个对象，
 * 这决定了工厂方法模式如何生成对象，取决于抽象类，而不是具体类
 *
 */
interface FactoryMethod
{
    public function createContract(): ContractInterface;
}
