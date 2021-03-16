<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:40 下午
 */

namespace App\PhpPatterns\action\Command;

/**
 * 合同条款命令接口，定义了统一的执行方法
 */
interface ClauseCommandInterface
{
    public function exec();
}
