<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 5:55 下午
 */

namespace App\PhpPatterns\action\Interpreter;

/**
 * 符号表达
 */
class SymbolExpression extends ExpressionAbstract
{
    function interpreter($str): bool
    {
        $arr = explode(' ', $str);
        return $arr[0] == 'ONLINE_CUSTOMER_UPDATE_CONTRACT';
    }
}
