<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 5:53 下午
 */

namespace App\PhpPatterns\action\Interpreter;

/**
 * 中文字符串表达
 */
class StrExpression extends ExpressionAbstract
{
    function interpreter($str): bool
    {
        $arr = explode(' ', $str);
        return $arr[0] == '线上客户更新合同';
    }
}
