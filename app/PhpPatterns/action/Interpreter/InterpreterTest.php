<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 5:50 下午
 */

namespace App\PhpPatterns\action\Interpreter;

use Tests\TestCase;

/**
 * 解释器模式
 *
 *
 * 场景：
 * 解析日志中的信息，如果是线上客户频繁操作合同，给予风险提示
 */
class InterpreterTest extends TestCase
{
    public function testInterpreter()
    {
        $Logs = [
            '线上客户更新合同 2021-03-17 12:12:35',
            'ONLINE_CUSTOMER_UPDATE_CONTRACT 2021-03-17 13:34:11',
            '线下客户更新合同 2021-03-17 14:06:51',
            '线上客户更新合同 2021-03-17 15:42:35',
            'ONLINE_CUSTOMER_DELETE_CONTRACT 2021-03-17 16:23:24',
        ];

        $interpreter = new Interpreter();
        $str = $interpreter->exec($Logs);
        $this->assertEquals('客服操作存在风险', $str);
    }
}
