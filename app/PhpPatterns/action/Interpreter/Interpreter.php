<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 5:50 下午
 */

namespace App\PhpPatterns\action\Interpreter;

/**
 * 合同日志解释器
 */
class Interpreter
{
    private $count;

    public function __construct()
    {
        $this->count = 0;
    }

    public function exec(array $logs): string
    {
        $strExpression = new StrExpression();
        $symbolExpression = new SymbolExpression();
        $orExpression = new OrExpression($strExpression, $symbolExpression);

        foreach ($logs as $log) {
            $isTrue = $orExpression->interpreter($log);
            if ($isTrue) {
                $this->count += 1;
            }
            if ($this->count >= 3) {
                return '客服操作存在风险';
            }
        }
        return '客服操作正常';
    }
}
