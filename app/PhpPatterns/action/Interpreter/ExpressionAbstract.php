<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 6:04 下午
 */

namespace App\PhpPatterns\action\Interpreter;

/**
 * 表达式抽象类
 */
abstract class ExpressionAbstract
{
    abstract public function interpreter($str): bool;
}
