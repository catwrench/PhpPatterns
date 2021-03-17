<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 6:01 下午
 */

namespace App\PhpPatterns\action\Interpreter;

/**
 * 或表达
 */
class OrExpression extends ExpressionAbstract
{
    private $first;
    private $second;

    public function __construct(ExpressionAbstract $first, ExpressionAbstract $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    function interpreter($str): bool
    {
        $res1 = $this->first->interpreter($str);
        $res2 = $this->second->interpreter($str);

        return $res1 == true || $res2 == true;
    }
}
