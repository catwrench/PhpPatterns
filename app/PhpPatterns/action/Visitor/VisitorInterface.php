<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:01 下午
 */

namespace App\PhpPatterns\action\Visitor;

/**
 * 访问者接口
 */
interface VisitorInterface
{
    public function getVisitor(): string;
}
